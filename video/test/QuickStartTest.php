<?php
/**
 * Copyright 2017 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

class quickstartTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        if (!$creds = getenv('GOOGLE_APPLICATION_CREDENTIALS')) {
            $this->markTestSkipped('Set the GOOGLE_APPLICATION_CREDENTIALS ' .
                'environment variable');
        }
    }
    
    public function testQuickstart()
    {
        // Invoke quickstart.php
        $results = include __DIR__ . '/../quickstart.php';
        $display = $this->getActualOutput();
        $this->assertContains('label_annotations', $display);
    }
}
