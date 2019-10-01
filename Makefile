backup-locales:
	cp -r app/locales/* zanata/backup/

restore-locales:
	cp -r zanata/backup/* app/locales/

prepare-locales:
	rm -f zanata/yml/*.yml zanata/po/*.po zanata/po/*.pot zanata/po/*.err

clean-locales:
	zanata/scripts/cleanyml.sh

po:
	zanata/scripts/yml2po.sh

yml: backup-locales
	zanata/scripts/po2yml.sh

push-locales: po
	zanata-cli -q -B push --push-type both

pull-locales: prepare-locales
	cp zanata/zanata.xml zanata.xml
	sed -e 's@<project></project>@<project>$(shell basename $(CURDIR))</project>@' -i zanata.xml
	zanata-cli -q -B pull --pull-type both --min-doc-percent 75
	make yml

preview:
	npm run preview

build:
	npm run prod
