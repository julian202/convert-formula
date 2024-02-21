ECHO OFF
CLS
SET PATH=C:\Program Files (x86)\Google\Cloud SDK\google-cloud-sdk\bin;%PATH%;
cd C:\Program Files (x86)\Google\Cloud SDK
ECHO Welcome to the Google Cloud SDK! Run "gcloud -h" to get the list of available commands.
ECHO ---
ECHO ON
gcloud app deploy "C:\Users\julia\OneDrive\App Engine and More\convertir-milliamperes-watts\FilesToDeploy\app.yaml" --project convertir-milliamperes-watts --no-promote --verbosity info


