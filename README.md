# Weather API Data

## Overview
**Weather API Data** is a RESTful API application built using **Laravel** and **MySQL**. The application scrapes and aggregates weather data from the **Meteo API**, organizing and exposing it through well-structured API endpoints. The API provides current, daily, and hourly weather information for municipalities across Timor-Leste.

## Features
- **Current Weather Data**: Retrieve real-time weather data for all municipalities or specific ones.
- **Daily Forecast**: Get weather forecasts for the next 7 days for a specific municipality.
- **Hourly Forecast**: Access weather data for the next 10 hours for any municipality.

## Requirements
- PHP 8.0+
- Composer
- Laravel 9.x
- MySQL 8.x
- cURL
- API Key from Meteo API

## Installation

1. **Clone the Repository**
   ```bash
   git clone https://github.com/your-repo/weather-api-data.git
   cd weather-api-data

2. **Install Dependencies**
   ```bash
   composer install

3. **Configure Enviroment**
   ```bash
   cp .env.example .env

4. **Run the Database Migration**
   ```bash
   php artisan migrate

5. **Start Application**
   ```bash
   php artisan serve
