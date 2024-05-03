pipeline {
    agent any

    stages {
        stage('Clone') {
            steps {
                git branch: 'main', url: 'https://github.com/TongmengHAI/laravel-website_jenkins.git'
            }

        }
        stage('Composer'){
            steps{
                sh 'composer install'
            }
        }
        stage('Copy .env'){
            steps{
                sh 'cp .env.example .env'
            }
        }
        stage('App key'){
            steps{
                sh 'php artisan key:generate'
            }
        }
        stage('npm'){
            steps{
                sh 'npm install'
                sh 'npm run build'
            }
        }
        stage('test'){
            steps{
                sh 'php artisan test'
            }

            post {
                success {
                    mail(
                        subject : "Pipeline Successful",
                        body    : "The Jenkins pipeline has succuess",
                        to      : "tongmeng016@gmail.com"

                    )
                }
                failure {
                    mail(
                        subject : "Pipeline failed",
                        body    : "The Jenkins pipeline has failed",
                        to      : "tongmeng016@gmail.com"
                    )
                }

            }
        }
    }


}
