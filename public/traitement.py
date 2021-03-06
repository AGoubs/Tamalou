import spacy
import pandas as pd
import json
import unicodedata

try:
    nlp = spacy.load("fr_core_news_lg")

    userSymptomesTxt = open("userSymptomes.txt", "r")
    text = userSymptomesTxt.read()
    doc = nlp(text)

    pronom = list(token.lemma_ for token in doc if token.tag_ == "PRON")
    verbe = list(token.lemma_ for token in doc if token.tag_ == "VERB")
    adverbe = list(token.lemma_ for token in doc if token.tag_ == "ADV")
    nom = list(token.lemma_ for token in doc if token.tag_ == "NOUN")
    nom_propre = list(token.lemma_ for token in doc if token.tag_ == "PROPN")

    def strip_accents(s):
        return''.join((c for c in unicodedata.normalize('NFD', s) if unicodedata.category(c) != 'Mn'))

    nom_list = []
    for item in nom:
        nom_list.append(strip_accents(item))

    bodyPartJson = open('bodyPartSynonyme.json')
    loadedBodyPartJson = json.load(bodyPartJson)
    resultOfJsonComparaison = []

    for bodyPart in loadedBodyPartJson:
        for synonyme in loadedBodyPartJson[bodyPart]:
            for nom_to_nlp in nom_list:
                nlp_synonyme = nlp(synonyme)
                nlp_nom = nlp(nom_to_nlp)
                similarity = nlp_nom.similarity(nlp_synonyme)
                if similarity > 0.8:
                    resultOfJsonComparaison.append(
                        loadedBodyPartJson[bodyPart][0])
                    break

    bodyPartJson.close()

    dataToFindInDataset = []
    for data in resultOfJsonComparaison:
        if data == 'tete':
            dataToFindInDataset.append('mal_de_tete')
        if data == 'ventre':
            dataToFindInDataset.append('mal_de_ventre')
        if data == 'gout':
            dataToFindInDataset.append('perte_de_gout')

    symptomesToMedecineJson = open('symptomesToMedecine.json')
    loadedSymptomesToMedecineJson = json.load(symptomesToMedecineJson)
    possibleMedecineToTake = []

    for data1 in loadedSymptomesToMedecineJson:
        for data2 in dataToFindInDataset:
            if data1 == data2 and data2 == 'mal_de_tete':
                possibleMedecineToTake.append(
                    loadedSymptomesToMedecineJson[data2])
            if data1 == data2 and data2 == 'mal_de_ventre':
                possibleMedecineToTake.append(
                    loadedSymptomesToMedecineJson[data2])
            if data1 == data2 and data2 == 'perte_de_gout':
                possibleMedecineToTake.append(
                    loadedSymptomesToMedecineJson[data2])

    symptomesToMedecineJson.close()

    # dataset = pd.read_csv('symptomes_dataset.csv', delimiter=',',
    #                      encoding="ISO-8859-1", encoding_errors='ignore')
    dataset = pd.read_csv('treatedDataset.csv', delimiter=',',
                          encoding="ISO-8859-1", encoding_errors='ignore')

    deseases = []
    for el in dataToFindInDataset:
        dataset["Indexes"] = dataset[el].where(dataset[el] == 1)

    i = dataset[dataset['Indexes'] == 1]
    if len(i) < 5:
        deseases.append(i.iloc[-1][-2])

    dataset.dropna(subset=["Indexes"], inplace=True)

    def listToString(s):
        str1 = ""

        for ele in s:
            str1 += ele
            str1 += ", "
        str1 = str1[:-1]

        return str1

    resSymptomes = listToString(
        dataToFindInDataset)
    resSymptomes = resSymptomes.replace("_", " ")
    resSymptomes = resSymptomes[:-1]

    resMedecine = listToString(possibleMedecineToTake)
    resMedecine = resMedecine[:-1]

    resDeseases = listToString(deseases)
    resDeseases = resDeseases[:-1]

    if len(dataset["Indexes"]) > 5:
        resume = 'Vos symptomes correspondent ?? ' + \
            str(len(dataset["Indexes"])) + ' maladies. N??anmoins, pour soulager: ' + \
            resSymptomes + '; vous pouvez prendre: ' + resMedecine + '.'
        print(resume)
    elif len(dataset["Indexes"]) <= 5:
        resume = 'Vous avez surement une de ces maladies: ' + resDeseases + '. Pour soulager: ' + \
            resSymptomes + '; vous pouvez prendre: ' + resMedecine + '.'
        print(resume)
    else:
        resume = "D??sol??, nous n'avons pas trouv?? de maladies correspondantes aux symptomes que vous avez renseign??, je crois que j'ai encore besoin d'entrainement ^^'"
        print(resume)

    dataToFindInDataset = []
    possibleMedecineToTake = []
    resultOfJsonComparaison = []
except KeyError as err:
    print("Error: KeyError: Je suis encore en apprentissage, veuillez faire attention ?? votre orthographe pour m'aider ?? comprendre :)")
except BaseException as err:
    print(f"Error: BaseException: {err=}")
