<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t008lexer.g 2010-09-10 19:39:16


use Antlr\Runtime\IntStream;
use Antlr\Runtime\DFA;
use Antlr\Runtime\Parser;
use Antlr\Runtime\Lexer;
use Antlr\Runtime\CommonToken;
use Antlr\Runtime\Set;
use Antlr\Runtime\Token;
use Antlr\Runtime\CharStream;
use Antlr\Runtime\RecognizerSharedState;
use Antlr\Runtime\ParserRuleReturnScope;

use Antlr\Runtime\EarlyExitException;
use Antlr\Runtime\FailedPredicateException;
use Antlr\Runtime\MismatchedRangeException;
use Antlr\Runtime\MismatchedSetException;
use Antlr\Runtime\MismatchedTokenException;
use Antlr\Runtime\NoViableAltException;
use Antlr\Runtime\RecognitionException;
use Antlr\Runtime\UnwantedtokenException;


 

class t008lexer extends Lexer {
    const T_EOF=-1;
    const T_FOO=4;

    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);


    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t008lexer.g"; }

    // $ANTLR start "FOO"
    function mFOO(){
        try {
            $_type = t008lexer::T_FOO;
            $_channel = t008lexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t008lexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t008lexer.g
            {
            $this->matchChar(102); 
            // runtime/Php/test/Antlr/Tests/grammers/t008lexer.g
            $alt1=2;
            $LA1_0 = $this->input->LA(1);

            if ( ($LA1_0==$this->getToken('97')) ) {
                $alt1=1;
            }
            switch ($alt1) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t008lexer.g
                    {
                    $this->matchChar(97); 

                    }
                    break;

            }


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "FOO"

    function mTokens(){
        // runtime/Php/test/Antlr/Tests/grammers/t008lexer.g
        // runtime/Php/test/Antlr/Tests/grammers/t008lexer.g
        {
        $this->mFOO(); 

        }


    }



}
?>