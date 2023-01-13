pipeline {
  agent any
  stages {
    stage('Cleanup') {
      steps {
        sh 'pwd'
      }
    }

    stage('Slip') {
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
        sh 'mkdir build; cp -r * build/;'
      }
    }

    stage('Archive Artifacts') {
      steps {
        archiveArtifacts(artifacts: 'build/*', defaultExcludes: true)
      }
    }

  }
}