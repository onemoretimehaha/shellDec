from mlxtend.classifier import StackingCVClassifier
from mlxtend.feature_selection import ColumnSelector
from sklearn.pipeline import make_pipeline
from sklearn.tree import DecisionTreeClassifier
from sklearn.neighbors import KNeighborsClassifier
from sklearn.linear_model import LogisticRegression
from sklearn.svm import SVC
from sklearn import model_selection
import pickle
import numpy as np
import joblib


def Stacking(knn_feature_index, tree_feature_index, svm_feature_index, x_train, y_label):
    pipe1 = make_pipeline(ColumnSelector(cols=knn_feature_index),
                          KNeighborsClassifier(n_neighbors=5))
    pipe2 = make_pipeline(ColumnSelector(cols=svm_feature_index),
                          SVC())
    pipe3 = make_pipeline(ColumnSelector(cols=tree_feature_index),
                          DecisionTreeClassifier())
    stacking = StackingCVClassifier(classifiers=[pipe1, pipe2, pipe3],
                                    meta_classifier=LogisticRegression(),
                                    random_state=42)
    print('5-fold cross validation:\n')
    score_type = ['accuracy', 'precision', 'recall', 'f1']
    for st in score_type:
        print("*******%s******" % (st))
        for clf, label in zip([pipe1, pipe2, pipe3, stacking],
                              ['knn',
                               'Tree',
                               'SVC',
                               'StackingClassifier']):
            scores = model_selection.cross_val_score(clf, x_train, y_label,
                                                     cv=5, scoring=st)
            print("[%s]: %0.6f (+/- %0.6f) [%s]"
                  % (st, scores.mean(), scores.std(), label))

    return stacking.fit(x_train, y_label)


if __name__ == "__main__":
    knn_feature = np.loadtxt('..\\data\\wd_knn_feature.csv', dtype=np.int32, delimiter=',')
    knn_feature_index = np.argwhere(knn_feature == 1)
    knn_feature_index = knn_feature_index.reshape(1, knn_feature_index.shape[0])
    knn_feature_index = list(knn_feature_index[0])

    svm_feature = np.loadtxt('..\\data\\wd_svm_feature.csv', dtype=np.int32, delimiter=',')
    svm_feature_index = np.argwhere(svm_feature == 1)
    svm_feature_index = svm_feature_index.reshape(1, svm_feature_index.shape[0])
    svm_feature_index = list(svm_feature_index[0])

    tree_feature = np.loadtxt('..\\data\\wd_tree_feature.csv', dtype=np.int32, delimiter=',')
    tree_feature_index = np.argwhere(tree_feature == 1)
    tree_feature_index = tree_feature_index.reshape(1, tree_feature_index.shape[0])
    tree_feature_index = list(tree_feature_index[0])

    with open('..\\data\\X_TRAIN.pkl', 'rb') as f: x_train = pickle.load(f)
    with open('..\\data\\Y_LABEL.pkl', 'rb') as f: y_label = pickle.load(f)

    stacking_model = Stacking(knn_feature_index, tree_feature_index, svm_feature_index, x_train, y_label)
    joblib.dump(stacking_model, '..\\data\\stacking.model')
