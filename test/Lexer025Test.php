<?php
namespace Antlr\Tests;
use Antlr\Runtime\ANTLRStringStream;
use Antlr\Runtime\TokenConst;

require_once "generated/t025lexerRulePropertyRef.php";

class LexerTest025 extends \PHPUnit_Framework_TestCase
{
    public function test1()
    {
        $lexer = $this->lexer("foobar _Ab98 \n A12sdf");
        while (true) {
            $token = $lexer->nextToken();
            if ($token->type == TokenConst::$EOF) {
                break;
            }
        }

        $expected = array(
            array('foobar', \t025lexerRulePropertyRef::T_IDENTIFIER, 1, 0, -1, TokenConst::$DEFAULT_CHANNEL, 0, 5),
            array('_Ab98', \t025lexerRulePropertyRef::T_IDENTIFIER, 1, 7, -1, TokenConst::$DEFAULT_CHANNEL, 7, 11),
            array('A12sdf', \t025lexerRulePropertyRef::T_IDENTIFIER, 2, 1, -1, TokenConst::$DEFAULT_CHANNEL, 15, 20));
        for ($i = 0; $i < sizeof($expected); $i++) {
            echo self::assertEquals($lexer->properties[$i], $expected[$i]);
        }
    }

    function lexer($input)
    {
        $ass = new ANTLRStringStream($input);
        $lexer = new \t025lexerRulePropertyRef($ass);
        return $lexer;
    }
}
