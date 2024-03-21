<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>PHP: Your first PHP-enabled page - Manual </title>

 <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
 <link rel="icon" type="image/png" sizes="196x196" href="https://www.php.net/favicon-196x196.png?v=2">
 <link rel="icon" type="image/png" sizes="32x32" href="https://www.php.net/favicon-32x32.png?v=2">
 <link rel="icon" type="image/png" sizes="16x16" href="https://www.php.net/favicon-16x16.png?v=2">
 <link rel="shortcut icon" href="https://www.php.net/favicon.ico?v=2">

 <link rel="search" type="application/opensearchdescription+xml" href="http://php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/releases/feed.php" title="PHP Release feed">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/feed.atom" title="PHP: Hypertext Preprocessor">

 <link rel="canonical" href="https://www.php.net/manual/en/tutorial.firstpage.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/tutorial.firstpage.php">
 <link rel="alternate" href="https://www.php.net/manual/en/tutorial.firstpage.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/tutorial.php">
 <link rel="prev" href="https://www.php.net/manual/en/tutorial.requirements.php">
 <link rel="next" href="https://www.php.net/manual/en/tutorial.useful.php">

 <link rel="alternate" href="https://www.php.net/manual/en/tutorial.firstpage.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/tutorial.firstpage.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/tutorial.firstpage.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/tutorial.firstpage.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/tutorial.firstpage.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/tutorial.firstpage.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/tutorial.firstpage.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/tutorial.firstpage.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/tutorial.firstpage.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/zh/tutorial.firstpage.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/cached.php?t=1689765002&amp;f=/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/cached.php?t=1700771401&amp;f=/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/cached.php?t=1710699603&amp;f=/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/cached.php?t=1701958202&amp;f=/styles/theme-medium.css" media="screen">

 <base href="https://www.php.net/manual/en/tutorial.firstpage.php">


</head>
<body class="docs ">

<nav id="head-nav" class="navbar navbar-fixed-top">
  <div class="navbar-inner clearfix">
    <a href="/" class="brand"><img src="/images/logos/php-logo.svg" width="48" height="24" alt="php"></a>
    <div id="mainmenu-toggle-overlay"></div>
    <input type="checkbox" id="mainmenu-toggle">
    <ul class="nav">
      <li class=""><a href="/downloads">Downloads</a></li>
      <li class="active"><a href="/docs.php">Documentation</a></li>
      <li class=""><a href="/get-involved" >Get Involved</a></li>
      <li class=""><a href="/support">Help</a></li>
      <li class="">
        <a href="/releases/8.3/index.php">
          <img src="/images/php8/logo_php8_3.svg" alt="php8.3" height="22" width="60">
        </a>
      </li>
    </ul>
    <form class="navbar-search" id="topsearch" action="/search.php">
      <input type="hidden" name="show" value="quickref">
      <input type="search" name="pattern" class="search-query" placeholder="Search" accesskey="s">
    </form>
  </div>
  <div id="flash-message"></div>
</nav>
<div class="headsup"><a href='/index.php#2024-03-14-2'>PHP 8.3.4 Released!</a></div>
<nav id="trick"><div><dl>
<dt><a href='/manual/en/getting-started.php'>Getting Started</a></dt>
	<dd><a href='/manual/en/introduction.php'>Introduction</a></dd>
	<dd><a href='/manual/en/tutorial.php'>A simple tutorial</a></dd>
<dt><a href='/manual/en/langref.php'>Language Reference</a></dt>
	<dd><a href='/manual/en/language.basic-syntax.php'>Basic syntax</a></dd>
	<dd><a href='/manual/en/language.types.php'>Types</a></dd>
	<dd><a href='/manual/en/language.variables.php'>Variables</a></dd>
	<dd><a href='/manual/en/language.constants.php'>Constants</a></dd>
	<dd><a href='/manual/en/language.expressions.php'>Expressions</a></dd>
	<dd><a href='/manual/en/language.operators.php'>Operators</a></dd>
	<dd><a href='/manual/en/language.control-structures.php'>Control Structures</a></dd>
	<dd><a href='/manual/en/language.functions.php'>Functions</a></dd>
	<dd><a href='/manual/en/language.oop5.php'>Classes and Objects</a></dd>
	<dd><a href='/manual/en/language.namespaces.php'>Namespaces</a></dd>
	<dd><a href='/manual/en/language.enumerations.php'>Enumerations</a></dd>
	<dd><a href='/manual/en/language.errors.php'>Errors</a></dd>
	<dd><a href='/manual/en/language.exceptions.php'>Exceptions</a></dd>
	<dd><a href='/manual/en/language.fibers.php'>Fibers</a></dd>
	<dd><a href='/manual/en/language.generators.php'>Generators</a></dd>
	<dd><a href='/manual/en/language.attributes.php'>Attributes</a></dd>
	<dd><a href='/manual/en/language.references.php'>References Explained</a></dd>
	<dd><a href='/manual/en/reserved.variables.php'>Predefined Variables</a></dd>
	<dd><a href='/manual/en/reserved.exceptions.php'>Predefined Exceptions</a></dd>
	<dd><a href='/manual/en/reserved.interfaces.php'>Predefined Interfaces and Classes</a></dd>
	<dd><a href='/manual/en/reserved.attributes.php'>Predefined Attributes</a></dd>
	<dd><a href='/manual/en/context.php'>Context options and parameters</a></dd>
	<dd><a href='/manual/en/wrappers.php'>Supported Protocols and Wrappers</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/security.php'>Security</a></dt>
	<dd><a href='/manual/en/security.intro.php'>Introduction</a></dd>
	<dd><a href='/manual/en/security.general.php'>General considerations</a></dd>
	<dd><a href='/manual/en/security.cgi-bin.php'>Installed as CGI binary</a></dd>
	<dd><a href='/manual/en/security.apache.php'>Installed as an Apache module</a></dd>
	<dd><a href='/manual/en/security.sessions.php'>Session Security</a></dd>
	<dd><a href='/manual/en/security.filesystem.php'>Filesystem Security</a></dd>
	<dd><a href='/manual/en/security.database.php'>Database Security</a></dd>
	<dd><a href='/manual/en/security.errors.php'>Error Reporting</a></dd>
	<dd><a href='/manual/en/security.variables.php'>User Submitted Data</a></dd>
	<dd><a href='/manual/en/security.hiding.php'>Hiding PHP</a></dd>
	<dd><a href='/manual/en/security.current.php'>Keeping Current</a></dd>
<dt><a href='/manual/en/features.php'>Features</a></dt>
	<dd><a href='/manual/en/features.http-auth.php'>HTTP authentication with PHP</a></dd>
	<dd><a href='/manual/en/features.cookies.php'>Cookies</a></dd>
	<dd><a href='/manual/en/features.sessions.php'>Sessions</a></dd>
	<dd><a href='/manual/en/features.xforms.php'>Dealing with XForms</a></dd>
	<dd><a href='/manual/en/features.file-upload.php'>Handling file uploads</a></dd>
	<dd><a href='/manual/en/features.remote-files.php'>Using remote files</a></dd>
	<dd><a href='/manual/en/features.connection-handling.php'>Connection handling</a></dd>
	<dd><a href='/manual/en/features.persistent-connections.php'>Persistent Database Connections</a></dd>
	<dd><a href='/manual/en/features.commandline.php'>Command line usage</a></dd>
	<dd><a href='/manual/en/features.gc.php'>Garbage Collection</a></dd>
	<dd><a href='/manual/en/features.dtrace.php'>DTrace Dynamic Tracing</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/funcref.php'>Function Reference</a></dt>
	<dd><a href='/manual/en/refs.basic.php.php'>Affecting PHP's Behaviour</a></dd>
	<dd><a href='/manual/en/refs.utilspec.audio.php'>Audio Formats Manipulation</a></dd>
	<dd><a href='/manual/en/refs.remote.auth.php'>Authentication Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.cmdline.php'>Command Line Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.compression.php'>Compression and Archive Extensions</a></dd>
	<dd><a href='/manual/en/refs.crypto.php'>Cryptography Extensions</a></dd>
	<dd><a href='/manual/en/refs.database.php'>Database Extensions</a></dd>
	<dd><a href='/manual/en/refs.calendar.php'>Date and Time Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.file.php'>File System Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.international.php'>Human Language and Character Encoding Support</a></dd>
	<dd><a href='/manual/en/refs.utilspec.image.php'>Image Processing and Generation</a></dd>
	<dd><a href='/manual/en/refs.remote.mail.php'>Mail Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.math.php'>Mathematical Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.nontext.php'>Non-Text MIME Output</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.process.php'>Process Control Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.other.php'>Other Basic Extensions</a></dd>
	<dd><a href='/manual/en/refs.remote.other.php'>Other Services</a></dd>
	<dd><a href='/manual/en/refs.search.php'>Search Engine Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.server.php'>Server Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.session.php'>Session Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.text.php'>Text Processing</a></dd>
	<dd><a href='/manual/en/refs.basic.vartype.php'>Variable and Type Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.webservice.php'>Web Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.windows.php'>Windows Only Extensions</a></dd>
	<dd><a href='/manual/en/refs.xml.php'>XML Manipulation</a></dd>
	<dd><a href='/manual/en/refs.ui.php'>GUI Extensions</a></dd>
</dl>
<dl>
<dt>Keyboard Shortcuts</dt><dt>?</dt>
<dd>This help</dd>
<dt>j</dt>
<dd>Next menu item</dd>
<dt>k</dt>
<dd>Previous menu item</dd>
<dt>g p</dt>
<dd>Previous man page</dd>
<dt>g n</dt>
<dd>Next man page</dd>
<dt>G</dt>
<dd>Scroll to bottom</dd>
<dt>g g</dt>
<dd>Scroll to top</dd>
<dt>g h</dt>
<dd>Goto homepage</dd>
<dt>g s</dt>
<dd>Goto search<br>(current page)</dd>
<dt>/</dt>
<dd>Focus search box</dd>
</dl></div></nav>
<div id="goto">
    <div class="search">
         <div class="text"></div>
         <div class="results"><ul></ul></div>
   </div>
</div>

  <div id="breadcrumbs" class="clearfix">
    <div id="breadcrumbs-inner">
          <div class="next">
        <a href="tutorial.useful.php">
          Something Useful &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="tutorial.requirements.php">
          &laquo; What do I need?        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='getting-started.php'>Getting Started</a></li>      <li><a href='tutorial.php'>A simple tutorial</a></li>      </ul>
    </div>
  </div>




<div id="layout" class="clearfix">
  <section id="layout-content">
  <div class="page-tools">
    <div class="change-language">
      <form action="/manual/change.php" method="get" id="changelang" name="changelang">
        <fieldset>
          <label for="changelang-langs">Change language:</label>
          <select onchange="document.changelang.submit()" name="page" id="changelang-langs">
            <option value='en/tutorial.firstpage.php' selected="selected">English</option>
            <option value='de/tutorial.firstpage.php'>German</option>
            <option value='es/tutorial.firstpage.php'>Spanish</option>
            <option value='fr/tutorial.firstpage.php'>French</option>
            <option value='it/tutorial.firstpage.php'>Italian</option>
            <option value='ja/tutorial.firstpage.php'>Japanese</option>
            <option value='pt_BR/tutorial.firstpage.php'>Brazilian Portuguese</option>
            <option value='ru/tutorial.firstpage.php'>Russian</option>
            <option value='tr/tutorial.firstpage.php'>Turkish</option>
            <option value='zh/tutorial.firstpage.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
    <div class="edit-bug">
      <a href="https://github.com/php/doc-en/blob/master/chapters/tutorial.xml">Submit a Pull Request</a>
      <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ftutorial.firstpage%0A%0A---">Report a Bug</a>
    </div>
  </div><div id="tutorial.firstpage" class="section">
   <div class="info"><h1 class="title">Your first PHP-enabled page</h1></div>
   <p class="para">
    Create a file named <var class="filename">hello.php</var> and put it
    in your web server&#039;s root directory (<var class="varname">DOCUMENT_ROOT</var>) 
    with the following content:
   </p>
   <p class="para">
    <div class="example" id="example-4">
     <div class="info"><p><strong>Example #1 Our first PHP script: <var class="filename">hello.php</var></strong></p></div>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">&lt;!DOCTYPE html&gt;<br />&lt;html&gt;<br />    &lt;head&gt;<br />        &lt;title&gt;PHP Test&lt;/title&gt;<br />    &lt;/head&gt;<br />    &lt;body&gt;<br />        <span style="color: #0000BB">&lt;?php </span><span style="color: #007700">echo </span><span style="color: #DD0000">'&lt;p&gt;Hello World&lt;/p&gt;'</span><span style="color: #007700">; </span><span style="color: #0000BB">?&gt;<br /></span>    &lt;/body&gt;<br />&lt;/html&gt;</span></code></div>
     </div>

     <div class="example-contents"><p>
      Use your browser to access the file with your web server&#039;s URL, ending
      with the <code class="literal">/hello.php</code> file reference. When developing locally this
      URL will be something like <code class="literal">http://localhost/hello.php</code> 
      or <code class="literal">http://127.0.0.1/hello.php</code> but this depends on the
      web server&#039;s configuration. If everything is configured correctly, this
      file will be parsed by PHP and the following output will be sent to
      your browser:
     </p></div>
     <div class="example-contents screen">
<div class="cdata"><pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;PHP Test&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;p&gt;Hello World&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;
</pre></div>
     </div>
    </div>
   </p>
   <p class="para">
    This program is extremely simple and you really did not need to use
    PHP to create a page like this. All it does is display:
    <code class="literal">Hello World</code> using the PHP <span class="function"><a href="function.echo.php" class="function">echo</a></span>
    statement. Note that the file <em>does not need to be executable</em>
    or special in any way. The server finds out that this file needs to be interpreted
    by PHP because you used the &quot;.php&quot; extension, which the server is configured
    to pass on to PHP. Think of this as a normal HTML file which happens to have
    a set of special tags available to you that do a lot of interesting things.
   </p>
   <p class="para">
    If you tried this example and it did not output anything, it prompted 
    for download, or you see the whole file as text, chances are that the 
    server you are on does not have PHP enabled, or is not configured properly.
    Ask your administrator to enable it for you using the
    <a href="install.php" class="link">Installation</a> chapter 
    of the manual. If you are developing locally, also read the
    installation chapter to make sure everything is configured
    properly. Make sure that you access the file via http with the server
    providing you the output. If you just call up the file from your file
    system, then it will not be parsed by PHP. If the problems persist anyway,
    do not hesitate to use one of the many
    <a href="https://www.php.net/support.php" class="link external">&raquo;&nbsp;PHP support</a> options.
   </p>
   <p class="para">
    The point of the example is to show the special PHP tag format.
    In this example we used <code class="literal">&lt;?php</code> to indicate the
    start of a PHP tag. Then we put the PHP statement and left PHP mode by
    adding the closing tag, <code class="literal">?&gt;</code>. You may jump in
    and out of PHP mode in an HTML file like this anywhere you want.  For more
    details, read the manual section on the <a href="language.basic-syntax.php" class="link">
    basic PHP syntax</a>.
   </p>
  
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="info"><strong>A Note on Line Feeds</strong><br /></span>
    <p class="para">
     Line feeds have little meaning in HTML, however it is still a good idea
     to make your HTML look nice and clean by putting line feeds in.  A
     linefeed that follows immediately after a closing
     <code class="literal">?&gt;</code> will be removed by PHP.  This can be extremely
     useful when you are putting in many blocks of PHP or include files
     containing PHP that aren&#039;t supposed to output anything.  At the same time
     it can be a bit confusing.  You can put a space after the closing
     <code class="literal">?&gt;</code> to force a space and a line feed to be output,
     or you can put an explicit line feed in the last echo/print from within
     your PHP block.
    </p> 
   </p></blockquote> 

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="info"><strong>A Note on Text Editors</strong><br /></span>
    <p class="para">
     There are many text editors and Integrated Development Environments (IDEs)
     that you can use to create, edit and manage PHP files. A partial list of 
     these tools is maintained at <a href="http://en.wikipedia.org/wiki/List_of_PHP_editors" class="link external">&raquo;&nbsp;PHP Editors
     List</a>. If you wish to recommend an editor, please visit the above
     page and ask the page maintainer to add the editor to the list.  Having
     an editor with syntax highlighting can be helpful.
    </p>
   </p></blockquote>
   
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="info"><strong>A Note on Word Processors</strong><br /></span>
    <p class="para">
     Word processors such as StarOffice Writer, Microsoft Word and Abiword are
     not optimal for editing PHP files.  If you wish to use one for this 
     test script, you must ensure that you save the file as <em>plain
     text</em> or PHP will not be able to read and execute the script.
    </p>
   </p></blockquote>
   
   <p class="para">
    Now that you have successfully created a working PHP script, it is
    time to create the most famous PHP script!  Make a call to the
    <span class="function"><a href="function.phpinfo.php" class="function">phpinfo()</a></span> function and you will see a lot of useful
    information about your system and setup such as available
    <a href="language.variables.predefined.php" class="link">predefined variables</a>, 
    loaded PHP modules, and <a href="configuration.php" class="link">configuration</a>
    settings. Take some time and review this important information.
   </p>
   <p class="para">
    <div class="example" id="example-7">
     <div class="info"><p><strong>Example #2 Get system information from PHP</strong></p></div>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php phpinfo</span><span style="color: #007700">(); </span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=tutorial.firstpage&amp;redirect=https://www.php.net/manual/en/tutorial.firstpage.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="tutorial.php">A simple tutorial</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="tutorial.requirements.php" title="What do I need?">What do I need?</a>
                        </li>
                                                <li class="current">
                            <a href="tutorial.firstpage.php" title="Your first PHP-&#8203;enabled page">Your first PHP-&#8203;enabled page</a>
                        </li>
                                                <li class="">
                            <a href="tutorial.useful.php" title="Something Useful">Something Useful</a>
                        </li>
                                                <li class="">
                            <a href="tutorial.forms.php" title="Dealing with Forms">Dealing with Forms</a>
                        </li>
                                                <li class="">
                            <a href="tutorial.whatsnext.php" title="What's next?">What's next?</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                    </ul>
    </aside>


  </div><!-- layout -->

  <footer>
    <div class="container footer-content">
      <div class="row-fluid">
      <ul class="footmenu">
        <li><a href="/copyright.php">Copyright &copy; 2001-2024 The PHP Group</a></li>
        <li><a href="/my.php">My PHP.net</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/sites.php">Other PHP.net sites</a></li>
        <li><a href="/privacy.php">Privacy policy</a></li>
      </ul>
      </div>
    </div>
  </footer>

    
 <!-- External and third party libraries. -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="/cached.php?t=1657730402&amp;f=/js/ext/hogan-3.0.2.min.js"></script>
<script src="/cached.php?t=1421837618&amp;f=/js/ext/typeahead.min.js"></script>
<script src="/cached.php?t=1657876202&amp;f=/js/ext/mousetrap.min.js"></script>
<script src="/cached.php?t=1657730402&amp;f=/js/ext/jquery.scrollTo.min.js"></script>
<script src="/cached.php?t=1701958202&amp;f=/js/search.js"></script>
<script src="/cached.php?t=1701958202&amp;f=/js/common.js"></script>

<a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top" src="/images/to-top@2x.png"></a>

</body>
</html>
