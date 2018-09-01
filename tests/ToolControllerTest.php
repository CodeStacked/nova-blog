<?php

namespace Stack\NovaTool\Tests;

use Stack\NovaTool\Http\Controllers\ToolController;
use Stack\NovaTool\NovaTool;
use Symfony\Component\HttpFoundation\Response;

class ToolControllerTest extends TestCase
{
    /** @test */
    public function it_can_can_return_a_response()
    {
        $this
            ->get('nova-vendor/stack/nova-tool/endpoint')
            ->assertSuccessful();
    }
}
