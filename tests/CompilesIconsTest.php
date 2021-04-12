<?php

declare(strict_types=1);

namespace Tests;

use Orchestra\Testbench\TestCase;
use BladeUI\Icons\BladeIconsServiceProvider;
use Codeat3\BladeFontAudio\BladeFontAudioServiceProvider;

class CompilesIconsTest extends TestCase
{
    /** @test */
    public function it_compiles_a_single_anonymous_component()
    {
        $result = svg('fontaudio-bluetooth')->toHtml();

        // Note: the empty class here seems to be a Blade components bug.
        $expected = <<<'SVG'
            <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M131.31 27.08c5.287 4.567 56.852 46.483 59.5 49.262 2.648 2.778 2.494 8.238-.488 11.384-2.981 3.145-49.453 41.303-49.453 41.303s45.242 37.302 48.583 40.157c3.341 2.855 3.121 11.217.87 13.162-2.25 1.945-57.84 47.267-60.01 48.492-2.168 1.224-8.976-1.584-9.444-5.395-.468-3.81-1.099-77.728-1.099-77.728-.01-1.102-.699-1.425-1.54-.721 0 0-41.477 34.746-44.537 36.474-3.06 1.727-4.94.411-6.66-.901-1.72-1.313-2.613-4.435-3.117-6.674-.505-2.24.08-4.673 1.278-5.746 1.198-1.073 46.222-38.744 46.222-38.744 1.692-1.416 1.684-3.71-.022-5.122 0 0-45.314-37.463-47.08-39.048-1.767-1.584-.83-4.267.002-6.382.832-2.116 2.777-6.545 4.03-7.415 1.255-.87 2.628-.61 4.818 1.025 2.19 1.636 45.684 36.613 45.684 36.613.863.694 1.55.352 1.545-.755 0 0-.306-75.85-.306-77.786 0-1.935 5.936-10.022 11.224-5.455zm4.124 26.561l-.335 56.21c-.007 1.106.682 1.439 1.538.742l33.03-26.877c1.278-1.04 1.287-2.746.01-3.801l-32.684-27c-.85-.701-1.552-.38-1.559.726zm1.453 92.099c-.831-.72-1.51-.407-1.517.7l-.351 59.45c-.007 1.106.662 1.426 1.509.702l33.993-29.091c.84-.72.837-1.894.016-2.606l-33.65-29.155z" fill-rule="evenodd"/></svg>
            SVG;

        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_can_add_classes_to_icons()
    {
        $result = svg('fontaudio-bluetooth', 'w-6 h-6 text-gray-500')->toHtml();

        $expected = <<<'SVG'
            <svg class="w-6 h-6 text-gray-500" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M131.31 27.08c5.287 4.567 56.852 46.483 59.5 49.262 2.648 2.778 2.494 8.238-.488 11.384-2.981 3.145-49.453 41.303-49.453 41.303s45.242 37.302 48.583 40.157c3.341 2.855 3.121 11.217.87 13.162-2.25 1.945-57.84 47.267-60.01 48.492-2.168 1.224-8.976-1.584-9.444-5.395-.468-3.81-1.099-77.728-1.099-77.728-.01-1.102-.699-1.425-1.54-.721 0 0-41.477 34.746-44.537 36.474-3.06 1.727-4.94.411-6.66-.901-1.72-1.313-2.613-4.435-3.117-6.674-.505-2.24.08-4.673 1.278-5.746 1.198-1.073 46.222-38.744 46.222-38.744 1.692-1.416 1.684-3.71-.022-5.122 0 0-45.314-37.463-47.08-39.048-1.767-1.584-.83-4.267.002-6.382.832-2.116 2.777-6.545 4.03-7.415 1.255-.87 2.628-.61 4.818 1.025 2.19 1.636 45.684 36.613 45.684 36.613.863.694 1.55.352 1.545-.755 0 0-.306-75.85-.306-77.786 0-1.935 5.936-10.022 11.224-5.455zm4.124 26.561l-.335 56.21c-.007 1.106.682 1.439 1.538.742l33.03-26.877c1.278-1.04 1.287-2.746.01-3.801l-32.684-27c-.85-.701-1.552-.38-1.559.726zm1.453 92.099c-.831-.72-1.51-.407-1.517.7l-.351 59.45c-.007 1.106.662 1.426 1.509.702l33.993-29.091c.84-.72.837-1.894.016-2.606l-33.65-29.155z" fill-rule="evenodd"/></svg>
            SVG;

        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_can_add_styles_to_icons()
    {
        $result = svg('fontaudio-bluetooth', ['style' => 'color: #555'])->toHtml();

        $expected = <<<'SVG'
            <svg style="color: #555" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M131.31 27.08c5.287 4.567 56.852 46.483 59.5 49.262 2.648 2.778 2.494 8.238-.488 11.384-2.981 3.145-49.453 41.303-49.453 41.303s45.242 37.302 48.583 40.157c3.341 2.855 3.121 11.217.87 13.162-2.25 1.945-57.84 47.267-60.01 48.492-2.168 1.224-8.976-1.584-9.444-5.395-.468-3.81-1.099-77.728-1.099-77.728-.01-1.102-.699-1.425-1.54-.721 0 0-41.477 34.746-44.537 36.474-3.06 1.727-4.94.411-6.66-.901-1.72-1.313-2.613-4.435-3.117-6.674-.505-2.24.08-4.673 1.278-5.746 1.198-1.073 46.222-38.744 46.222-38.744 1.692-1.416 1.684-3.71-.022-5.122 0 0-45.314-37.463-47.08-39.048-1.767-1.584-.83-4.267.002-6.382.832-2.116 2.777-6.545 4.03-7.415 1.255-.87 2.628-.61 4.818 1.025 2.19 1.636 45.684 36.613 45.684 36.613.863.694 1.55.352 1.545-.755 0 0-.306-75.85-.306-77.786 0-1.935 5.936-10.022 11.224-5.455zm4.124 26.561l-.335 56.21c-.007 1.106.682 1.439 1.538.742l33.03-26.877c1.278-1.04 1.287-2.746.01-3.801l-32.684-27c-.85-.701-1.552-.38-1.559.726zm1.453 92.099c-.831-.72-1.51-.407-1.517.7l-.351 59.45c-.007 1.106.662 1.426 1.509.702l33.993-29.091c.84-.72.837-1.894.016-2.606l-33.65-29.155z" fill-rule="evenodd"/></svg>
            SVG;

        $this->assertSame($expected, $result);
    }

    protected function getPackageProviders($app)
    {
        return [
            BladeIconsServiceProvider::class,
            BladeFontAudioServiceProvider::class,
        ];
    }
}