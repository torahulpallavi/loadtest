#!/usr/bin/env bash


#export GATLING_HOME= "$(pwd)/Tools/gatling/gatling-charts-highcharts-bundle-3.0.0"
export JAVA_OPTS="-Xms200m -Xmx200m"
echo $JAVA_OPTS



sh gatling.sh -sf $(pwd)/src/gatling/scala -s MyFirstTest -rf $(pwd)/src/gatling/result


