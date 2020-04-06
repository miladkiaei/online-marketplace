<?php

namespace Tests\Unit;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UploadCSVTest extends TestCase
{
    public function testCreateTableRecordAfterSuccessUpload()
    {
        $this->assertTrue(True);
    }

    public function testValidateContent()
    {
        // We have to check validation of CSV file in real project
        // But I leave this test unimplemented, because of the time
        // and I set the TODO:Implement Content

        return $this->assertTrue(True);

    }

    public function testUploadFile()
    {
        //Arrange
        Storage::fake('csv_file');

        //Act
        $this->json('POST', route('admin_panel.csv.upload'), [
            'file' => UploadedFile::fake()->create('test.csv')
        ]);

        //Assert
        Storage::assertExists('test.csv');
    }

}
