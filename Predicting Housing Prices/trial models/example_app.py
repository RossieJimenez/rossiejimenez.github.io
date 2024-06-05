from flask import Flask, request, jsonify, render_template
import pickle
import numpy as np

app = Flask(__name__)

# Load the model
with open('random_forest_model.pkl', 'rb') as file:
    model = pickle.load(file)

@app.route('/')
def home():
    return render_template('index.html')

@app.route('/predict_home_price', methods=['POST'])
def predict_home_price():
    try:
        data = request.form
        input_features = [float(data[feature]) for feature in ['bedrooms', 'bathrooms', 'sqft_living', 'floors', 'waterfront', 'view', 'yr_built','zipcode']]
        prediction = model.predict([input_features])        
        return jsonify({'prediction': prediction[0]})
    except KeyError as e:
        return jsonify({'error': f'Missing key: {e}'}), 400
    except Exception as e:
        return jsonify({'error': str(e)}), 500

if __name__ == '__main__':
    app.run(debug=True)
