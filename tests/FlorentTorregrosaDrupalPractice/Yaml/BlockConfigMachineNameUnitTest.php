<?php

namespace FlorentTorregrosaDrupalPractice\Test\Yaml;

use FlorentTorregrosaDrupalPractice\Test\CoderSniffUnitTest;

class BlockConfigMachineNameUnitTest extends CoderSniffUnitTest
{

    /**
     * Returns a list of test files that should be checked.
     *
     * @param string $testFileBase The base path that the unit tests files will have.
     *
     * @return array<string>
     */
    protected function getTestFiles($testFileBase): array
    {
        return [
            __DIR__.'/language/fr/block.block.bartik_help.yml',
            __DIR__.'/block.block.bartik_help.yml',
            __DIR__.'/block.block.wrong_help.yml',
        ];

    }//end getTestFiles()

    /**
     * Returns the lines where errors should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of errors that should occur on that line.
     *
     * @param string $testFile The name of the file being tested.
     *
     * @return array<int, int>
     */
    protected function getErrorList(string $testFile): array
    {
        return [];

    }//end getErrorList()

    /**
     * Returns the lines where warnings should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of warnings that should occur on that line.
     *
     * @param string $testFile The name of the file being tested.
     *
     * @return array<int, int>
     */
    protected function getWarningList(string $testFile): array
    {
        switch ($testFile) {
        case 'block.block.wrong_help.yml':
            return [1 => 1];
        default:
            return [];
        }

    }//end getWarningList()

}//end class
