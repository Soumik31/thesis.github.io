# Traffic Prediction Using Kalman Filter

A bachelor thesis project that predicts road traffic density using the **Kalman Filter** algorithm.

## How it works

1. A custom-built vehicle counter (Arduino Nano + pressure sensor + GSM module) counts vehicles on the road every 5 minutes
2. Raw counts are sent to a server and stored in a database
3. MATLAB downloads the data, applies the Kalman Filter, and uploads predictions back to the server
4. The Android app (KPCC) fetches predictions and shows traffic density on a map with color coding
5. This website displays the data and documents the project

## Live Demo

Hosted on GitHub Pages: https://soumik31.github.io/thesis.github.io/

> The Data page uses mock/sample data since the original MySQL backend is not available on GitHub Pages.

## Pages

| Page | Description |
|------|-------------|
| Home | Project overview and workflow |
| About | Objectives and introduction |
| Photos | Gallery of hardware setup |
| Hardware | Components used (Arduino, sensors, GSM) |
| Kalman ft | Kalman filter flowchart |
| Data | Sample traffic data tables |
| APP | Download the Android app (KPCC.apk) |
| Contact | Team contact info |

## Tech Stack

- Frontend: HTML, CSS, jQuery
- Backend (original): PHP, MySQL
- Algorithm: Kalman Filter (MATLAB)
- Hardware: Arduino Nano, MPXV5050DP pressure sensor, SIM808 GSM module
- Mobile: Android (KPCC app)

## Team

- Nazmus Sa-Adat
- Samir Karim
- Mashrur Hasnain
- Soumik Shadman
