<?php
?>
<h1 class="page-header">Документация</h1>
<div class="edit-panel" style="margin: 0 0 1em 0;">
  <a href="https://github.com/slimphp/Slim-Website/tree/gh-pages/docs/index.md" target="_blank"
     class="btn btn-default btn-xs"><i class="fa fa-github"></i> Редактировать </a>
</div>
<div class="alert alert-info">
  <p>
    Эта документация предназначена для <strong>Slim 3</strong>. Документацию по Slim 2 можно найти на <a
            href="http://docs.slimframework.com/">docs.slimframework.com</a>.
  </p>
</div>

<p style="text-align: center;">
  <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">
    <img alt="Creative Commons License" style="border-width:0"
         src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png"/>
  </a>
  <br/>
  This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">Creative
    Commons Attribution-NonCommercial-NoDerivatives 4.0 International License</a>.
</p>

<h2 id="welcome">Welcome</h2>

<p>Slim is a PHP micro framework that helps you
  quickly write simple yet powerful web applications and APIs. At its core, Slim
  is a dispatcher that receives an HTTP request, invokes an appropriate callback
  routine, and returns an HTTP response. That’s it.</p>

<h2 id="whats-the-point">What’s the point?</h2>

<p>Slim is an ideal tool to create APIs that consume, repurpose, or publish data. Slim is also
  a great tool for rapid prototyping. Heck, you can even build full-featured web
  applications with user interfaces. More importantly, Slim is super fast
  and has very little code. In fact, you can read and understand its source code
  in only an afternoon!</p>

<blockquote>
  <p>At its core, Slim
    is a dispatcher that receives an HTTP request, invokes an appropriate callback
    routine, and returns an HTTP response. That’s it.</p>
</blockquote>

<p>You don’t always need a kitchen-sink solution like <a href="http://symfony.com/">Symfony</a> or <a
          href="http://laravel.com/">Laravel</a>.
  These are great tools, for sure. But they are often overkill. Instead, Slim
  provides only a minimal set of tools that do what you need and nothing else.</p>

<h2 id="how-does-it-work">How does it work?</h2>

<p>First, you need a web server like Nginx or Apache. You should <a href="web-servers.html">configure
    your web server</a> so that it sends all appropriate
  requests to one “front-controller” PHP file. You instantiate and run your Slim
  app in this PHP file.</p>

<p>A Slim app contains routes that respond to specific HTTP requests. Each route
  invokes a callback and returns an HTTP response. To get started, you first
  instantiate and configure the Slim application. Next, you define your application
  routes. Finally, you run the Slim application. It’s that easy. Here’s an
  example application:</p>

<figure>

  <figure class="highlight"><pre><code class="language-php" data-lang="php"><span class="cp">&lt;?php</span>
<span class="c1">// Create and configure Slim app
</span><span class="nv">$config</span> <span class="o">=</span> <span class="p">[</span><span
                class="s1">'settings'</span> <span class="o">=&gt;</span> <span class="p">[</span>
    <span class="s1">'addContentLengthHeader'</span> <span class="o">=&gt;</span> <span class="kc">false</span><span
                class="p">,</span>
<span class="p">]];</span>
<span class="nv">$app</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">\Slim\App</span><span
                class="p">(</span><span class="nv">$config</span><span class="p">);</span>

<span class="c1">// Define app routes
</span><span class="nv">$app</span><span class="o">-&gt;</span><span class="na">get</span><span class="p">(</span><span
                class="s1">'/hello/{name}'</span><span class="p">,</span> <span class="k">function</span> <span
                class="p">(</span><span class="nv">$request</span><span class="p">,</span> <span
                class="nv">$response</span><span
                class="p">,</span> <span class="nv">$args</span><span class="p">)</span> <span
                class="p">{</span>
    <span class="k">return</span> <span class="nv">$response</span><span class="o">-&gt;</span><span
                class="na">write</span><span class="p">(</span><span class="s2">"Hello "</span> <span
                class="o">.</span> <span class="nv">$args</span><span class="p">[</span><span
                class="s1">'name'</span><span class="p">]);</span>
<span class="p">});</span>

<span class="c1">// Run app
</span><span class="nv">$app</span><span class="o">-&gt;</span><span class="na">run</span><span
                class="p">();</span></code></pre>
  </figure>

  <figcaption>Figure 1: Example Slim application</figcaption>
</figure>

<h2 id="request-and-response">Request and response</h2>

<p>When you build a Slim app, you are often working directly with Request
  and Response objects. These objects represent the actual HTTP request received
  by the web server and the eventual HTTP response returned to the client.</p>

<p>Every Slim app route is given the current Request and Response objects as arguments
  to its callback routine. These objects implement the popular <a href="../concepts/value-objects.html">PSR 7</a>
  interfaces. The Slim app route can inspect
  or manipulate these objects as necessary. Ultimately, each Slim app route
  <strong>MUST</strong> return a PSR 7 Response object.</p>

<h2 id="bring-your-own-components">Bring your own components</h2>

<p>Slim is designed to play well with other PHP components, too. You can register
  additional first-party components such as <a href="https://github.com/slimphp/Slim-Csrf/">Slim-Csrf</a>, <a
          href="https://github.com/slimphp/Slim-HttpCache">Slim-HttpCache</a>,
  or <a href="https://github.com/slimphp/Slim-Flash">Slim-Flash</a> that build upon Slim’s default
  functionality. It’s also
  easy to integrate third-party components found on <a href="https://packagist.org/">Packagist</a>.</p>

<h2 id="how-to-read-this-documentation">How to read this documentation</h2>

<p>If you are new to Slim, I recommend you read this documentation from start
  to finish. If you are already familiar with Slim, you can instead jump straight
  to the appropriate section.</p>

<p>This documentation begins by explaining Slim’s concepts and architecture
  before venturing into specific topics like request and response handling,
  routing, and error handling.</p>


<nav>
  <ul class="nav pager">
    <li class="next">
      <a href="installation.html" rel="next">
        <small>Get Started:</small>
        Installation <i class="fa fa-arrow-right"></i></a>
    </li>
  </ul>
</nav>


