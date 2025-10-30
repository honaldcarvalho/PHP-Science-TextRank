<?php
namespace CroacWorks\TextRank\Tool\StopWords;

/**
 * Lista de stopwords em português (BR/PT)
 * baseada em listas da Snowball e Lucene.
 */
class Portuguese implements StopWordsAbstract
{
    /**
     * @var array
     */
    protected $stopWords = [
        'a','à','ao','aos','as','às','o','os','uma','umas','um','uns',
        'de','da','das','do','dos','em','no','nos','na','nas',
        'para','por','per','pelos','pelo','pela','pelas',
        'com','sem','sob','sobre','entre','após','antes','até','contra','desde','durante',
        'e','ou','mas','nem','que','porque','como','quando','onde','quanto','enquanto',
        'se','sendo','ser','sou','era','foi','fui','foram','está','estavam','estive','estiveram',
        'há','havia','ter','tenho','tinha','teve','tiveram','tido','tendo',
        'fazer','fez','feito','fazendo','pode','pude','podem','podia','podiam','poder',
        'vai','vou','vão','iria','iremos','iremos','iria','iria',
        'me','te','se','lhe','nos','vos','lhes','meu','minha','meus','minhas',
        'seu','sua','seus','suas','dele','dela','deles','delas',
        'este','esta','estes','estas','isso','isto','aquele','aquela','aqueles','aquelas',
        'algo','alguém','algum','alguns','alguma','algumas','ninguém','nenhum','nenhuma',
        'todo','toda','todos','todas','cada','qual','quais',
        'mesmo','mesma','mesmos','mesmas','outro','outra','outros','outras',
        'também','então','ainda','muito','muitos','muita','muitas','pouco','pouca','poucos','poucas',
        'já','não','sim','nunca','sempre','agora','ontem','hoje','amanhã',
        'lá','aqui','ali','acolá','acima','abaixo','dentro','fora','perto','longe',
        'sobre','sob','atrás','frente','junto','junto','lado',
        'era','era','são','será','serão','seria','seriam','tem','têm',
        'dele','dela','deles','delas','nosso','nossa','nossos','nossas',
        'vosso','vossa','vossos','vossas','seu','sua','seus','suas',
        'ou','e','mas','pois','entretanto','todavia','porém','logo','portanto','então',
        'pra','pro','pros','pras','num','numa','nuns','numas','dum','duma','duns','dumas',
    ];

    /**
     * @inheritdoc
     */
    public function getStopWords(): array
    {
        return $this->stopWords;
    }
}
