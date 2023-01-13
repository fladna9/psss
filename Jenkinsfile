pipeline {
  agent any
  stages {
    stage('Cleanup') {
      steps {
        sh 'pwd'
      }
    }

    stage('Branch') {
      parallel {
        stage('Slip') {
          steps {
            sleep 5
          }
        }

        stage('Show builder hostname') {
          steps {
            sh 'hostname'
          }
        }

      }
    }

    stage('Build') {
      steps {
        sh 'mkdir build; cp -r config.php.example css imgs index.en.php index.fr.php index.php template.en.php template.fr.php build/;'
      }
    }

    stage('Archive Artifacts') {
      steps {
        archiveArtifacts(artifacts: 'build/*', defaultExcludes: true)
      }
    }

  }
}