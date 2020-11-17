## this part is responsible with shr xwf
### this part's functions includes:
* how to prepare the datasets for training and evaluating
* code of the model
* how to run the code
  - running enviroment 
  - training command
  - testing command
  - remark information
* provide trained model files
* list some notices for users

-xwf
* Optimize the module which has been run last week
* Configuring environment issues is really time consuming
* actually nothing substantial

-shr
* download the MS-COCO dataset, can be used to train and test
* vgg16.py and vgg16_weights.npz(maybe xwf download them), can be used to train, now it can recognize some images, however it makes some mistakes
* learn some about LSTM, can be used to generate subtitle

-shr
download the jupyter notebook
try to use the valimage of MSCOCO-2017 th train:
    1.use CNN to get the images feature
       a. VGG-16
    2.use VGG-16 to Load weight value and reasoning, five steps
       a. Build and update variables
       b. Preprocess input
       c. reason
       d. The Direction Quantization Representation of the extracted image
       e. use VGG-16 to predict the probability of image classification
