<?php

namespace Tests\Feature;

use App\Events\TextRead;
use App\Traits\ConceptsTrait;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Event;
use Tests\TestCase;

class LearningExampleTest extends TestCase
{
    use ConceptsTrait;
    /**
     * Un texto leído es un evento
     */
    public function test_text_read_is_an_event()
    {
        Event::fake();
        $user = $this->person();
        $text = $this->text();
        $user->readText($text);
        Event::assertDispatched(TextRead::class, function ($e) use ($user, $text) {
            return $e->text->isRead == true;
        });
    }

}
