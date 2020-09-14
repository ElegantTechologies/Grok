<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Grok
        </h2>
    </x-slot>


<div class="py-12">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <x-jet-section-border/>
                  <x-grok::action-section>
                    <x-slot name="title">
                       Show Code Samples
                    </x-slot>

                    <x-slot name="description">
                        <div class="text-xs">
                        code
                        </div>
                    </x-slot>
                      <x-slot name="content">
                          You can show code like this css
                          <pre><code class="language-css">p { color: red }</code></pre>
                          by encasing in
                          For example...
                          @php
                          $sample =<<<EOD
                          <pre><code class="language-css"> p { color: red } </code></pre>
                          EOD;
                          $sampleEscaped =  htmlspecialchars($sample);
                          @endphp
                          <pre><code class="language-html">{!!  $sampleEscaped !!}</code></pre>

                          <hr>
                          <x-title>Escaping</x-title>
                          Since the browser will render html, we need to escape our samples.
                          @php
                          $sample =<<<EOL
                          --- in php ---
                          \$sample =<<<EOD
                          <pre><code class="language-css"> p { color: red } </code></pre>
                          EOD;
                          \$sampleEscaped =  htmlspecialchars(\$sample);

                          ---- in html/blade ----
                          <pre><code class="language-php">{!!  \$sampleEscaped !!}</code></pre>
                          EOL;
                          $sampleEscaped =  htmlspecialchars($sample);
                          @endphp

                           <pre><code class="language-php">{!!  $sampleEscaped !!}</code></pre>
                          <hr>
                           <x-title>Loading from file</x-title>
                          If you are loading the sample code from a file, you can do something like this...
                           @php
                          $sample =<<<EOL
                          <x-tas-sample-from-file language="php" path="resources/views/howto/sample_code_short.blade.php"/>
                          EOL;
                          $sampleEscaped =  htmlspecialchars($sample);
                          @endphp
                          <pre><code class="language-php">{!!  $sampleEscaped !!}</code></pre>
                          Which will yield...
                          <x-tas-sample-from-file language="php" path="resources/views/tas_sample/sample_code/short.blade.php"/>
                          The required parameters are 'language' and 'path', where 'path' is off the app root directory
                          and language is (php,html,javascript,console,css);
                          <hr>
                          <x-title>Installation</x-title>
                          To install and set up code highlighting, so something like this....
                          <x-tas-sample-from-file language="console" path="resources/views/tas_sample/sample_code/installationSteps.blade.php"/>

                          Now, in your resources/layouts/app.blade.php file (or wherever is relevant for your app) copy in html...
                          <x-tas-sample-from-file language="html" path="resources/views/tas_sample/sample_code/html.blade.php"/>

                    </x-slot>
                  </x-grok::action-section>



            </div>
        </div>
    </div>
</div>


</x-app-layout>
