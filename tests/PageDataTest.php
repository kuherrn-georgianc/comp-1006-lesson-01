<?php

    use PHPUnit\Framework\TestCase;
    require_once getcwd() . "/src/PageData.php";

    // Extends allows 'PageDataTest' to inherit the methods from 'TestCase'
    class PageDataTest extends TestCase {
        
        public function testCorrectArgumentsResultsInSuccessfulInstantiation() {
            /* PageData::class will return the fully qualified name of "PageData" class including the namespace
            https://stackoverflow.com/questions/30770148/what-is-class-in-php */
            $this->assertInstanceOf(PageData::class, new PageData("title", "content"));
        }

        /* What does 'exceptException' do?
        https://phpunit.readthedocs.io/en/latest/writing-tests-for-phpunit.html#testing-exceptions */
        public function testMissingArgumentsCausesFailedInstantiation () {
            $this->expectException(ArgumentCountError::class);
            new PageData();
        }

        public function testIncorrectArgumentCausesFailedInstantiation() {
            $this->expectException(TypeError::class);
            new PageData();
        }

        public function testGetTitleSuccessfullyReturnsTitle () {
            $pgData = new PageData("title", "content");
            $this->assertEquals("title", $pgData->getTitle());
        }

        public function testGetContentSuccessfullyReturnsContent() {
            $pgData = new PageData("title", "content");
            $this->assertEquals("content", $pgData->getContent());
        }

        public function testSetTitleSuccessfullySetTitle() {
            $pgData = new PageData("title", "content");
            $pgData->setTitle("new title");
            $this->assertEquals("new title", $pgData->getTitle());
        }

        public function testSetContentSuccessfullySetContent() {
            $pgData = new PageData("title", "content");
            $pgData->setContent("new content");
            $this->assertEquals("new content", $pgData->getContent());
        }
    }