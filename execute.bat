SET GATLING_HOME=Tools\gatling\gatling-charts-highcharts-bundle-3.0.0
SET JAVA_HOME=Tools\java\jdk1.8.0_181
SET PATH=%PATH%;%GATLING_HOME%\bin;%JAVA_HOME%\bin
%GATLING_HOME%\bin\gatling.bat -sf src\gatling\scala -s MyFirstTest -rf src\gatling\result

DEL /F *

:: gatling -sf .\src\gatling\scala -s MyFirstTest -rf  .\src\gatling\result



