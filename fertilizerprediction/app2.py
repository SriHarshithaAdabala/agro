
from flask import Flask,render_template, request
import pickle

import numpy as np 
model2=pickle.load(open('model2.pkl','rb'))
 
app = Flask(__name__)

@app.route('/')

def home():
    return render_template('index.html')
    # return send_file ("a.jpg")

@app.route('/predict',methods=['POST'])
def predict_crop():
    Temperature=float(request.form.get('Temperature'))
    Humidity=float(request.form.get('Humidity'))
    Moisture=float(request.form.get('Moisture'))
    SoilType=int(request.form.get('SoilType'))
    CropType=int(request.form.get('CropType'))
    Nitrogen=int(request.form.get('Nitrogen'))
    Potassium=int(request.form.get('Potassium'))
    Phosphorous=int(request.form.get('Phosphorous'))
    

    result=model2.predict(np.array([Temperature,Humidity,Moisture,SoilType,CropType,Nitrogen,Potassium,Phosphorous]).reshape(1,8))
    if result[0] == 0:
     return str("10-26-26")
    elif result[0] ==1:
     return str("14-35-14")
    elif result[0] == 2:
     return str("17-17-17	")
    elif result[0] == 3:
     return str("20-20")
    elif result[0] == 4:
     return str("28-28")
    elif result[0] == 5:
     return str("DAP")
    else:
     return str("Urea")
    
    return render_template('fertilizer.html', prediction=result)
if __name__=='__main__':
    app.run(port=3000,debug=True)