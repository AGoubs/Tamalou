apt install wget -y
apt install wget build-essential checkinstall -y
apt install libreadline-gplv2-dev libncursesw5-dev libssl-dev \
    libsqlite3-dev tk-dev libgdbm-dev libc6-dev libbz2-dev libffi-dev zlib1g-dev -y
cd /opt
wget https://www.python.org/ftp/python/3.9.6/Python-3.9.6.tgz
tar xzf Python-3.9.6.tgz
cd Python-3.9.6
./configure --enable-optimizations
make altinstall
rm -f /opt/Python-3.9.6.tgz
pip3.9 install -U spacy
pip3.9 install -U pandas
python3.9 -m spacy download fr_core_news_lg