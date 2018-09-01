<?php

namespace Stack\Nova\Tests;

use Stack\Nova\Http\Controllers\ToolController;
use Stack\Nova\Tools\BlogTool;
use Symfony\Component\HttpFoundation\Response;

class ToolControllerTest extends TestCase
{
    /** @test */
    public function it_can_can_return_a_response()
    {
        $this
            ->get('stack/CodeStacked/nova-blog/endpoint')
            ->assertSuccessful();
    }
}
