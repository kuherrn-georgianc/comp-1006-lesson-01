<?php

    use PHPUnit\Framework\TestCase;
    require_once getcwd() . "/src/PageData.php";

    class PageDataTest extends TestCase {
        
        public function testCorrectArgumentsResultsInSuccessfulInstantiation() {
            $this->assertInstanceOf(PageData::class, new PageData("title", "content"));
        }

        public function testMissingArgumentsCausesFailedInstantiation () {
            $this->expectException(ArgumentCountError::class);

            new PageData();
        }

        public function testIncorrectArgumentCausesFailedInstantiation() {
            $this->expectException(TypeError::class);

            new PageData([1,2,3], [1,2,3]);
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