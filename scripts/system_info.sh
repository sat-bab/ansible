#!/bin/bash

DIR="/home/secadmin/systeminfo/"
DATE1=`date '+%Y%m%d%H%M%S'`
DATE2=`date '+%Y%m%d'`

for file in $(cat "$DIR"/hosts)
do
	echo "Processing $file"
	python json_to_csv.py "$file"
	cat output.csv >> systeminfo_"$DATE1".csv
done
