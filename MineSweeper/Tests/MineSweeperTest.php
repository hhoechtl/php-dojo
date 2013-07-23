<?php

require_once('Classes/MineSweeper.php');

class MineSweeperTest extends PHPUnit_Framework_TestCase
{

    /**
     * @param $input
     * @covers MineSweeper::processInput
     */
    public function testProcessInput($input)
    {
        $this->assertTrue(true);
    }

    /**
     * @covers MineSweeper::processInput
     * @dataProvider processedArrayProvider
     * @todo test if output array has 3 dimensions and contains only boolean
     */
    public function testOutputFormatProcessInput()
    {

    }

    /**
     * @covers MineSweeper::calculateHints
     * @dataProvider processedArrayProvider
     * @todo test if output array has 3 dimensions and contains only boolean
     */
    public function testOutputFormatCalculateHints()
    {

    }

    /**
     * @covers MineSweeper::processInput
     * @todo test if input array dimensions and sizes matches output dimensions and sizes
     */
    public function testInputOutputSizeProcessInput()
    {

    }

    /**
     * @covers MineSweeper::calculateHints
     * @todo test if input array dimensions and sizes matches output dimensions and sizes
     */
    public function testInputOutputSizeCalculateHints()
    {

    }

    /**
     * @covers MineSweeper::calculateHints
     */
    public function testCalcHints()
    {
        $data = array(
            array(
                array(FALSE, FALSE, FALSE, FALSE),
                array(FALSE, TRUE,  FALSE, TRUE ),
                array(FALSE, FALSE, FALSE, FALSE),
                array(TRUE , FALSE, FALSE, FALSE)
            ),array(
                array(FALSE, FALSE, FALSE),
                array(FALSE, TRUE,  FALSE ),
                array(FALSE, FALSE, FALSE),
            )
        );
        $hints = array(
            array(
                array(1, 1, 2, 1),
                array(1, '*', 2, '*'),
                array(2, 2, 2, 1),
                array('*', 1, 0, 0)
            ),
            array(
                array(1,1,1),
                array(1,'*',1),
                array(1,1,1)
            )
        );

        $calculatedHints = MineSweeper::calculateHints($data);
        $this->assertEquals($hints,$calculatedHints);
    }

    /**
     * @dataProvider processedArrayProvider
     * @covers MineSweeper::calculateHints
     */
    public function testCalculateHints($processedArray, $expectedHints)
    {
        $calculatedHints = MineSweeper::calculateHints($processedArray);
        $this->assertEquals($expectedHints,$calculatedHints);
    }


    /**
     * Provide test data for hint calculation
     *
     * @return array 3-dimensional array of mines as expected by parsed input
     */
    public function processedArrayProvider()
    {
        $data = array();

        //Generate between 0 and 10 fields
        $fields = rand(0,10);

        for($i = 0; $i < $fields; $i++){

            //Dimensions of field are random between 1 and 100 => not empty
            $fieldWidth = rand(1,20);
            $fieldHeight = rand(1,20);
            $numberOfMines = rand(1,($fieldWidth*$fieldHeight)-1);

            //Fill field with FALSE => no mines
            $field = array_fill(0, $fieldWidth, array_fill(0, $fieldHeight, FALSE));

            // Randomly place mines
            $i = 0;
            while ($i < $numberOfMines) {
                $testX = array_rand($field);
                $testY = array_rand($field[$testX]);
                if (false === $field[$testX][$testY]) {
                    $field[$testX][$testY] = TRUE;
                    $i++;
                }
            }

            array_push($data,$field);
        }

        return $data;
    }

}
?>
