import pickle
import sys
import json
# import sklearn

with open("Coronavirus_logistic", "rb") as f:
    logisticRegression = pickle.load(f)


def Corona(temperature, age, cough, cold,
           sore_throat, body_pain, fatigue, headache, diarrhea, difficult_breathing,
           travelled14, travel_covid, covid_contact):

    age = 2 if (age > 50 or age < 10) else 0
    temperature = 1 if temperature > 98 else 0
    difficult_breathing = 2 if difficult_breathing else 0
    travelled14 = 3 if travelled14 else 0
    travel_covid = 3 if travel_covid else 0
    covid_contact = 3 if covid_contact else 0

    model_inputs = [cough, cold, diarrhea,
                    sore_throat, body_pain, headache, temperature, difficult_breathing, fatigue, travelled14, travel_covid, covid_contact, age]
    prediction = logisticRegression.predict([model_inputs])[0]
    # print("**************             ", prediction)
    if prediction:
        return json.dumps("Infected")
    else:
        return json.dumps("Non-infected")


if __name__ == '__main__':

    print(Corona(float(sys.argv[1]), int(sys.argv[2]), int(sys.argv[3]), int(sys.argv[4]),
                 int(sys.argv[5]), int(sys.argv[6]), int(sys.argv[7]), int(
                     sys.argv[8]), int(sys.argv[9]), int(sys.argv[10]),
                 int(sys.argv[11]), int(sys.argv[12]), int(sys.argv[13])))
