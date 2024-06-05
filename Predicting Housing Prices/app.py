# from flask import Flask, request, jsonify, render_template
# import pickle
# import numpy as np

# app = Flask(__name__)

# # Load the model
# with open('random_forest_model.pkl', 'rb') as file:
#     model = pickle.load(file)

# @app.route('/')
# def home():
#     return render_template('index_test.html')

# @app.route('/', methods=['POST'])
# def predict_home_price():
#         data = request.form
#         input_features = [float(data[feature]) for feature in ['bedrooms', 'bathrooms', 'sqft_living', 'floors', 'waterfront', 'view', 'yr_built','zipcode']]
#         prediction = model.predict([input_features])  

#         output = round(prediction[0], 0)      
#         return render_template('index_test.html', prediction="{:.0f}".format(output), data=data)
#         # return render_template('index.html', prediction=prediction[0].format(output),data=data)

# if __name__ == '__main__':
#     app.run(debug=True)

from flask import Flask, request, render_template
import pickle
import numpy as np

app = Flask(__name__)

# Load the model
with open('random_forest_model.pkl', 'rb') as file:
    model = pickle.load(file)

@app.route('/')
def home():
    return render_template('index_test.html')

@app.route('/About_us')
def about():
    return render_template('about.html')

@app.route('/eda')
def eda():
    return render_template('histogram_plots.html')

@app.route('/eda_barplots')
def bar_plots():
    return render_template('bar_plots.html')

@app.route('/bivariate')
def bivariate():
    return render_template('bivariate.html')

@app.route('/multivariate')
def multivariate():
    return render_template('multivariate.html')


@app.route('/', methods=['POST'])
def predict_home_price():
    data = request.form
    input_features = [
        float(data['bedrooms']),
        float(data['bathrooms']),
        float(data['sqft_living']),
        float(data['floors']),
        float(data['waterfront']),
        float(data['view']),
        float(data['year_built']),
        float(data['zipcode'])
    ]
    prediction = model.predict([input_features])[0]
    formatted_prediction = "${:,.0f}".format(float(prediction)) 
    return render_template('index_test.html', prediction=formatted_prediction, data=data)




if __name__ == '__main__':
    app.run(debug=True)
