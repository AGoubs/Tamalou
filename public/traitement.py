import spacy

nlp = spacy.load("fr_core_news_lg")

f = open("userSymptomes.txt", "r")
text = f.read()
doc = nlp(text)

print("Pronom:", [token.lemma_ for token in doc if token.tag_ == "PRON"], "Verbe:", [token.lemma_ for token in doc if token.tag_ == "VERB"], "Adverbe:", [
      token.lemma_ for token in doc if token.tag_ == "ADV"], "Nom:", [token.lemma_ for token in doc if token.tag_ == "NOUN"], "Nom proche:", [token.lemma_ for token in doc if token.tag_ == "PROPN"])
