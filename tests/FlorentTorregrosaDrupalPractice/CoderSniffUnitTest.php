<?php
/**
 * An abstract class that all sniff unit tests must extend.
 *
 * A sniff unit test checks a .inc file for expected violations of a single
 * coding standard. Expected errors and warnings that are not found, or
 * warnings and errors that are not expected, are considered test failures.
 *
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @copyright 2006-2015 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 */

namespace FlorentTorregrosaDrupalPractice\Test;

use Drupal\Test\CoderSniffUnitTest as ParentCoderSniffUnitTest;
use PHP_CodeSniffer\Util\Tokens;

abstract class CoderSniffUnitTest extends ParentCoderSniffUnitTest
{

    /**
     * Copy parent method because $rootDir attributes is private.
     *
     * @return void
     */
    public function setUp(): void
    {
      $this->rootDir  = __DIR__.'/../../';
      $this->testsDir = __DIR__.'/';
      // Required to pull in all the defines from the tokens file.
      $tokens = new Tokens();
      if (defined('PHP_CODESNIFFER_VERBOSITY') === false) {
        define('PHP_CODESNIFFER_VERBOSITY', 0);
      }

      if (defined('PHP_CODESNIFFER_CBF') === false) {
        define('PHP_CODESNIFFER_CBF', 0);
      }
    }//end setUp()


}//end class
