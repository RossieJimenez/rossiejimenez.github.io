# Predict Housing Prices

### Project Overview

#### Predicting Housing Prices

The primary goal of this project is to predict housing prices based on various factors, such as the number of rooms, bathrooms, and available amenities. By leveraging machine learning techniques, we aim to provide accurate and reliable price estimates to help potential homebuyers and real estate professionals make informed decisions.

### Table of Contents

- [Project Overview](#project-overview)
- [Objective](#objective)
- [Front End Development](#front-end-development)
- [Machine Learning Approach](#machine-learning-approach)
- [Technologies and Tools](#technologies-and-tools)
- [Dataset](#dataset)
- [Team Responsibilities](#team-responsibilities)
- [Repository](#repository)
- [Setup and Installation](#setup-and-installation)
- [Usage](#usage)
- [Project Status and Future Improvements](#project-status-and-future-improvements)

### Objective

The primary goal of this project is to predict housing prices based on various factors, such as the number of rooms, bathrooms, and available amenities. By leveraging machine learning techniques, we aim to provide accurate and reliable price estimates to help potential homebuyers and real estate professionals make informed decisions.

### Front End Development

We will develop an intuitive and user-friendly website where users can input details about a property, including the number of rooms, bathrooms, and other relevant amenities. The website will then utilize our predictive model to estimate the property's market price, offering users immediate insights based on their inputs.

### Machine Learning Approach

For the predictive model, we will employ Random Forest Regressor to understand and model the relationship between the input features (e.g., number of rooms, bathrooms, amenities) and housing prices. Random Forest Regressor is chosen for its simplicity and effectiveness in handling this type of regression problem.

### Technologies and Tools

- **Programming Language**: The primary language for data preprocessing, exploratory data analysis (EDA), and model development will be Python. TensorFlow for Java will be used for implementing the machine learning model.
- **Frameworks and Libraries**:
  - **Data Preprocessing and EDA**: Pandas, NumPy, Matplotlib
  - **Machine Learning**: Random Forest Regressor
  - **Web Development**: HTML, Flask (integrated with Java)

### Dataset

The dataset for training and testing our model is sourced from Kaggle, specifically the [Housing Price Dataset](https://www.kaggle.com/datasets/sukhmandeepsinghbrar/housing-price-dataset/data). This dataset includes various attributes relevant to housing prices, allowing for comprehensive analysis and model training.

#### Dataset Features

- **Number of rooms**
- **Number of bathrooms**
- **Square footage**
- **Amenities**
- **Location**
- **Price** (target variable)

### Team Responsibilities

- **Data Cleaning**
  - **Team Member**: Rodney
  - **Tasks**: Cleaning and preparing the dataset for analysis using Python.

- **Exploratory Data Analysis (EDA)**
  - **Team Members**: Jess and Rossie
  - **Tasks**: Performing EDA to uncover patterns and relationships within the data, particularly focusing on how features like the number of bedrooms, bathrooms, and square footage correlate with housing prices.

- **Machine Learning Model Development**
  - **Team Members**: Jess and Rossie
  - **Tasks**: Developing the linear regression model using TensorFlow for Java, and fine-tuning the model for optimal performance.

- **Website Development**
  - **Team Member**: Francesca
  - **Tasks**: Designing and developing the website using HTML and Flask (via Java), ensuring seamless integration with the predictive model.

### Repository

For more detailed information and access to our codebase, please visit our project repository: [Link to Repository](#) <!-- Add your repository link here -->

### Setup and Installation

1. **Clone the repository**:
   ```bash
   git clone [repository link]

2. **Navigate to the project directory**:
   ```bash
    cd predict-housing-prices

3. **Install the necessary Python packages**:
    ```bash
    pip install -r requirements.txt

4. **Setup TensorFlow for Java (instructions to be added based on specific setup)**.

### Usage

1. **Run the data cleaning script**:
   ```bash
   python data_cleaning.py

2. **Perform exploratory data analysis**:
   ```bash
    python eda.py

3. **Train the linear regression model**:
    ```bash
    python train_model.py

4. **Start the web application**:
    ```bash
    flask run

Open your browser and navigate to http://localhost:5000 to use the application.

Project Status and Future Improvements

permalink: /index_test.html

This project is currently in development. Future improvements include:

Adding more features to the model for better predictions.
Implementing a more advanced machine learning algorithm.
Enhancing the user interface of the website.
Providing deployment instructions for cloud platforms.
