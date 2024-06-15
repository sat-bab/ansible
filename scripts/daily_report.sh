#!/bin/bash

DIR="/home/secadmin/sar/"
DATE1=`date '+%Y%m%d%H%M%S'`
DATE2=`date '+%Y%m%d'`
HOST=`hostname`

echo "--------------------------------------------------------------------------"       >>      "$DIR""$HOST"_RES_UTIL_"$DATE2".txt 
echo "--------------------------------------------------------------------------"       >>      "$DIR""$HOST"_RES_UTIL_"$DATE2".txt
echo "RESOURCE UTILIZATION IN "$HOST" ON "$DATE2".txt FROM 09:00 AM  TO 06:00 PM"   >>      "$DIR""$HOST"_RES_UTIL_"$DATE2".txt
echo "--------------------------------------------------------------------------"       >>      "$DIR""$HOST"_RES_UTIL_"$DATE2".txt
echo "--------------------------------------------------------------------------"       >>      "$DIR""$HOST"_RES_UTIL_"$DATE2".txt
echo "CPU UTILIZATION"                                                                                       >>   "$DIR""$HOST"_RES_UTIL_"$DATE2".txt
#sar12
sar -u -s 09:00:00 -e 18:00:00 | grep -Ev 'Average|Linux|LINUX|CPU' | awk '{total+=$5; if ($5 > max) max=$5; if (min==""){min=max=$5} else if ($5<min) min=$5} END {printf "Average CPU Utilization: %2.2f%%\n", total/NR"%"; print "Maximum CPU Utilization:", max"%"; print "Minimum CPU Utilization:", min"%"}' >>     "$DIR""$HOST"_RES_UTIL_"$DATE2".txt
#sar11/10
#sar -u -s 09:00:00 -e 18:00:00 | grep -Ev 'Average|Linux|LINUX|CPU' | awk '{total+=$4; if ($4 > max) max=$4; if (min==""){min=max=$4} else if ($4<min) min=$4} END {printf "Average CPU Utilization: %2.2f%%\n", total/NR"%"; print "Maximum CPU Utilization:", max"%"; print "Minimum CPU Utilization:", min"%"}' >>     "$DIR""$HOST"_RES_UTIL_"$DATE2".txt

#echo " "                                                                                                >>       "$DIR""$HOST"_RES_UTIL_"$DATE2".txt
echo "---------------------------------------"                                                           >>       "$DIR""$HOST"_RES_UTIL_"$DATE2".txt
#sar12
echo "MEMORY UTILIZATION"                                                                                >>       "$DIR""$HOST"_RES_UTIL_"$DATE2".txt
sar -r -s 09:00:00 -e 18:00:00 | grep -Ev 'Average|Linux|LINUX|kbmemfree' | awk '{total+=$7; if ($7 > max) max=$7; if (min==""){min=max=$7} else if ($7<min) min=$7} END {printf "Average Memory Utilization: %2.2f%%\n", total/NR"%"; print "Maximum Memory Utilization:", max"%"; print "Minimum Memory Utilization:", min"%"}' >>    "$DIR""$HOST"_RES_UTIL_"$DATE2".txt
#sar11
#sar -r -s 09:00:00 -e 18:00:00 | grep -Ev 'Average|Linux|LINUX|kbmemfree' | awk '{total+=$6; if ($6 > max) max=$6; if (min==""){min=max=$6} else if ($6<min) min=$6} END {printf "Average Memory Utilization: %2.2f%%\n", total/NR"%"; print "Maximum Memory Utilization:", max"%"; print "Minimum Memory Utilization:", min"%"}' >>    "$DIR""$HOST"_RES_UTIL_"$DATE2".txt
#sar10
#sar -r -s 09:00:00 -e 18:00:00 | grep -Ev 'Average|Linux|LINUX|kbmemfree' | awk '{total+=$5; if ($5 > max) max=$5; if (min==""){min=max=$5} else if ($5<min) min=$5} END {printf "Average Memory Utilization: %2.2f%%\n", total/NR"%"; print "Maximum Memory Utilization:", max"%"; print "Minimum Memory Utilization:", min"%"}' >>    "$DIR""$HOST"_RES_UTIL_"$DATE2".txt
echo "---------------------------------------"                                                           >>       "$DIR""$HOST"_RES_UTIL_"$DATE2".txt
echo "I/O TRANSACTIONS"                                                                                  >>       "$DIR""$HOST"_RES_UTIL_"$DATE2".txt
#sar12
sar -b -s 09:00:00 -e 18:00:00 | grep -Ev 'Average|Linux|LINUX|tps' | awk '{total+=$4; if ($4 > max) max=$4; if (min==""){min=max=$4} else if ($4<min) min=$4} END {print "Average I/O Transactions:", total/NR; print "Maximum I/O Transactions:", max; print "Minimum I/O Transactions:", min}' >>      "$DIR""$HOST"_RES_UTIL_"$DATE2".txt
#sar11/10
#sar -b -s 09:00:00 -e 18:00:00 | grep -Ev 'Average|Linux|LINUX|tps' | awk '{total+=$3; if ($3 > max) max=$3; if (min==""){min=max=$3} else if ($3<min) min=$3} END {print "Average I/O Transactions:", total/NR; print "Maximum I/O Transactions:", max; print "Minimum I/O Transactions:", min}' >>      "$DIR""$HOST"_RES_UTIL_"$DATE2".txt

echo "---------------------------------------"                                                           >>       "$DIR""$HOST"_RES_UTIL_"$DATE2".txt
#echo " "                                                                                                >>       "$DIR""$HOST"_RES_UTIL_"$DATE2".txt
echo "LOAD (RUN QUEUE)"                                                                                  >>       "$DIR""$HOST"_RES_UTIL_"$DATE2".txt
#sar12
sar -q -s 09:00:00 -e 18:00:00 | grep -Ev 'Average|Linux|LINUX|runq-sz' | awk '{total+=$4; if ($4 > max) max=$4; if (min==""){min=max=$4} else if ($4<min) min=$4} END {print "Average LOAD (RUN QUEUE):", total/NR; print "Maximum LOAD (RUN QUEUE):", max; print "Minimum LOAD (RUN QUEUE):", min}' >>      "$DIR""$HOST"_RES_UTIL_"$DATE2".txt
#sar11/10
#sar -q -s 09:00:00 -e 18:00:00 | grep -Ev 'Average|Linux|LINUX|runq-sz' | awk '{total+=$3; if ($3 > max) max=$3; if (min==""){min=max=$3} else if ($3<min) min=$3} END {print "Average LOAD (RUN QUEUE):", total/NR; print "Maximum LOAD (RUN QUEUE):", max; print "Minimum LOAD (RUN QUEUE):", min}' >>      "$DIR""$HOST"_RES_UTIL_"$DATE2".txt

echo "---------------------------------------"                                                           >>       "$DIR""$HOST"_RES_UTIL_"$DATE2".txt

