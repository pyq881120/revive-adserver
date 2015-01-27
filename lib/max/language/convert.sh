#!/bin/bash

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

find . -type f | xargs sed -i 's/\x0D$//'
sed -i '/^$.*= "";/d' */*.php
sed -i "/^$.*= '';/d" */*.php

REPO=../../../../plugins_repo
for i in `ls`; do
	mv -f $i/*.php ../$i/

	for j in `ls $i/plugins`; do
		for k in `ls $i/plugins/$j`; do
			po=$i/plugins/$j/$k/en.po
			n=`grep msgstr $po | grep -v 'msgstr ""' | wc -l`
			if [ $n -gt 0 ]; then
				base=../../../../plugins_repo/$j/plugins/etc/$k/_lang
				msgfmt $po -o $base/$i.mo
				mv -f $po $base/po/$i.po
			fi
		done
	done
done

cd ..
rm -Rf build
