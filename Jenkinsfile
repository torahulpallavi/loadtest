pipeline {
    agent { label 'Loadgenerator'}

    parameters {

            string(defaultValue: "10", description: 'No of users to run test ', name: 'UserLoad')
            string(defaultValue: "2", description: 'Duration', name: 'Duration')
            string(defaultValue: "http://13.239.37.197:9098", description: 'URL', name: 'URL')


        }

         options { buildDiscarder(logRotator(numToKeepStr: '2')) }

    stages {
        stage('Execute load test ') {
            steps {



                    sh '''
                            echo "load test started"
                            chmod 777 gradlew

                            ./gradlew  gatlingRun  -DUserLoad=$UserLoad -DDuration=$Duration -DURL=$URL


                    '''

            }
        }


         stage('archieve') {
                    steps {

                          // archiveArtifacts artifacts: 'src/gatling/result/**'

                          archiveArtifacts artifacts: 'build/reports/gatling/**'
						  gatlingArchive()



                    }
                }


          stage('cleanup') {
                                    steps {

                                          sh '''
                                                 rm -rf ./build/reports/gatling
                                              '''


                                    }
                                }
    }
}