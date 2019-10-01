#!/bin/bash
yml=./tmp/yml
json=./tmp/json
clean=./tmp/clean

# Create a new working folder
# and works on copied files
rm -rf $clean
rm -rf $json
rm -rf $yml
mkdir -p $yml
cp -r ./app/locales/* $yml

for i in $yml/*/
do
  lg=$(echo $i | cut -d '/' -f 4)
  mkdir -p $json/$lg
  mkdir -p $clean/$lg
  for j in $yml/$lg/*.yml
  do
  filename=$(echo $j | cut -d '/' -f 5 | cut -d '.' -f 1 )

  # yml2json
  js-yaml $yml/$lg/$filename.yml > $json/$lg/$filename.json
  # json2yml
  js-yaml $json/$lg/$filename.json > $clean/$lg/$filename.yml
  echo "✔️ $lg/$filename"
  done
done
cp -r $clean/* ./app/locales
rm -rf ./tmp