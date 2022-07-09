import pickle
from sklearn.feature_extraction.text import CountVectorizer
from sklearn.feature_extraction.text import TfidfTransformer




def get_feature_for_train(wsod, wfod):
    with open(wsod, 'rb') as f:
        ws_opcode_list = pickle.load(f)
        ws_count = len(ws_opcode_list)
    with open(wfod, 'rb') as f:
        wf_opcode_list = pickle.load(f)
        wf_count = len(wf_opcode_list)

    total = wf_count + ws_count
    labels = [1] * ws_count + [0] * wf_count
    corpus = ws_opcode_list + wf_opcode_list

    CoVec = CountVectorizer(ngram_range=(1, 3), decode_error="ignore", max_features=5000,
                            token_pattern=r'\b\w+\b', min_df=1, max_df=1.0)

    # 生成词频矩阵 [i][j] -> k, j 词在 i 文本中的频率为 k
    Covec_Mat = CoVec.fit_transform(corpus).toarray()

    transformer = TfidfTransformer(smooth_idf=False)
    Tfidf_Mat = transformer.fit_transform(Covec_Mat).toarray()

    CVP = '..\\data\\CoVec.pkl'
    TfidfP = '..\\data\\transformer.pkl'
    X_TRAIN= '..\\data\\X_TRAIN.pkl'
    Y_LABEL = '..\\data\\Y_LABEL.pkl'

    with open(CVP, 'wb') as f: pickle.dump(CoVec, f)
    with open(TfidfP, 'wb') as f: pickle.dump(transformer, f)
    with open(X_TRAIN, 'wb') as f: pickle.dump(Tfidf_Mat, f)
    with open(Y_LABEL, 'wb') as f: pickle.dump(labels, f)

    print(Tfidf_Mat, total)
    return Tfidf_Mat, labels

if __name__ == "__main__":
    get_feature_for_train('..\\data\\webshell_opcode.pckle', '..\\data\\whitefile_opcode.pckle')