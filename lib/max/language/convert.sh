#!/bin/sh

# Donwload revive-adserver.zip from crowdin

rm -Rf build
mkdir build
cd build
unzip -qq ../revive-adserver.zip

mv es-ES es
mv ru-UA uk
mv sv-SE sv
mv pt-BR pt_BR
mv pt-PT pt_PT
mv zh-CN zh_CN
mv zh-TW zh_TW

for i in `ls`; do
	sed -i 's/\x0D$//' $i/*.php
	mv -f $i/*.php ../$i/
done

cd ..
rm -Rf build
