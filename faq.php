<?

/*
 * FAQ Page
 *
 */

// set this for position of this file relative
$file_root = ".";

// load libraries
require($file_root."/include/"."incl.php");

// start of html
html_header("ScummVM :: FAQ");
sidebar_start();

//display welcome table
echo html_round_frame_start("FAQ :: Frequently Asked Questions","98%","",20);

?>
<p>
  <big><b>FAQ</b></big><br>
  <small>last updated: <? echo date("F d, Y",getlastmod()); ?></small><br>
  <? echo html_line(); ?>
</p>

<ol>
 <li><a href="#1">Introduction</a>
   <ol>
       <li><a href="#1-1">Why is it called ScummVM - what does this name mean?</a></li>
       <li><a href="#1-2">What is SCUMM?</a></li>
       <li><a href="#1-3">Is ScummVM free?</a></li>
       <li><a href="#1-4">What games does ScummVM support?</a></li>
       <li><a href="#1-5">Will ScummVM support other games?</a></li>
       <li><a href="#1-6">Where do I find ScummVM?</a></li>
       <li><a href="#1-7">How do I compile the source code for my OS?</a></li>
       <li><a href="#1-8">What is the latest version of ScummVM?</a></li>
       <li><a href="#1-9">On what platforms does ScummVM run?</a></li>
       <li><a href="#1-10">Does ScummVM run any non Scumm games?</a></li>
    </ol>
  </li>
    
  <li><a href="#2">ScummVM and SCUMM games</a>
    <ol>
       <li><a href="#2-1">Do I need original CDs/Floppies?</a></li>
       <li><a href="#2-2">Does ScummVM work with all versions of games?</a></li>
       <li><a href="#2-3">Can I play through xxx (place your favorite SCUMM adventure here) ?</a></li>
       <li><a href="#2-4">Can I save/load the game?</a></li>
       <li><a href="#2-5">Do savegames from the original work in ScummVM?</a></li>
    </ol>
  </li>
    
  <li><a href="#3">Graphics and Audio</a>
    <ol>
      <li><a href="#3-1">Does ScummVM support CD audio?</a></li>
      <li><a href="#3-2">Does ScummVM support using MP3 files instead of CD audio?</a></li>
      <li><a href="#3-3">Does ScummVM support filtered graphics modes?</a></li>
      <li><a href="#3-4">Can I run my game full screen?</a></li>
    </ol>
  </li>

  <li><a href="#4">Troubleshooting</a>
    <ol>
      <li><a href="#4-1">My game won't run.</a></li>
      <li><a href="#4-2">I don't hear any sound.</a></li>
      <li><a href="#4-3">I don't hear any music.</a></li>
      <li><a href="#4-4">My game crashes at some point.</a></li>
      <li><a href="#4-5">The game colors are messed up.</a></li>
      <li><a href="#4-6">Reporting Bugs.</a></li>
    </ol>
  </li>
</ol>

<p>
<? echo html_line(); ?>
</p>

<ol>

  <li><a name="1"></a><b>Introduction</b><br>

    <ol>
      <li><a name="1-1"></a><b>Why is it called ScummVM - what does this name mean?</b></li>
	Scumm comes from the fact that it was designed to run SCUMM games, like Monkey Island.
	VM stands for VIRTUAL MACHINE.<br><br>

      <li><a name="1-2"></a><b>What is SCUMM?</b></li>
	SCUMM stands for "Script Creation Utility for Maniac Mansion". It is an utility used
	to create the famous LucasArts adventure games.<br>
	It was initially created in 1987 by Aric Wilmunder and Ron Gilbert for the game
	"Maniac Manson" and was used later, with some modifications, for Zak McKracken and
	the Alien Mindbenders, Loom, Indiana Jones and the Last Crusade, Indiana Jones and the Fate
	of Atlantis, Monkey Island 1,2,3, Sam & max Hit the Road, Day of the Tentacle, The Dig
	and Full Throttle.<br><br>

      <li><a name="1-3"></a><b>Is ScummVM free?</b></li>
	ScummVM is released under the GPL (General Public License), so it's more than free.
	ScummVM source code is freely available and you can do whatever you want with it. If you
	make modifications to it and redistribute your work you MUST make the source available.
	However, ScummVM team would be pleased if you choose to send them your modifications, so
	they can be merged into the main tree.<br>
	More information on the GNU GPL at
	<a href="http://www.gnu.org/copyleft/gpl.html">http://www.gnu.org/copyleft/gpl.html</a>.<br><br>

      <li><a name="1-4"></a><b>What games does ScummVM support?</b></li>
	We have a Compatability List on our website that contains an up to date list of what games work,
	and how well they work.
	<a href="compatibility.php">http://scummvm.sourceforge.net/compatibility.php</a>.<br><br>

      <li><a name="1-5"></a><b>Will ScummVM support other games?</b></li>
	The ScummVM team is working to make newer games, such as "The Dig", playable.<br>
	We are also working to correct make the currently supported games more accurate.<br><br>

      <li><a name="1-6"></a><b>Where do I find ScummVM?</b></li>
	You can find it on the page on sourceforge:
	<a href="http://www.sourceforge.net/projects/scummvm">http://www.sourceforge.net/projects/scummvm</a>.
	You can download the latest version, which could be a little old. For the most recent version,
	you have to get it via CVS (instructions are on SourceForge page).<br><br>

      <li><a name="1-7"></a><b>How do I compile the source code for my OS?</b></li>
	The source code package contains a file called
	<a href="http://cvs.sourceforge.net/cgi-bin/viewcvs.cgi/scummvm/scummvm/README?rev=HEAD">README</a>
	that should explain everything.<br><br>

      <li><a name="1-8"></a><b>What is the latest version of ScummVM?</b></li>
	It's currently in alpha status. See also 1.6 to learn where to find the latest version.<br><br>

      <li><a name="1-9"></a><b>On what platform does ScummVM run?</b></li>
	ScummVM should be able to be compiled on any SDL platform, just with small modifications.<br>
	Currently tested platforms are Win32 (Windows 9x/ME/NT/2000), Linux i386 and PPC, BeOS, Solaris, MacOS 9,
        MacOSX, Dreamcast, MorphOS, IRIX, and WinCE. It is also part of the FreeBSD ports collection<br><br>

      <li><a name="1-10"></a><b>Does ScummVM run any non-Scumm games?</b></li>
        Yes. Currently the only non Scumm game supported is Simon The Sorcerer. This game was added because it was very
	similar to Scumm. We don't have any plans to support any other non-Scumm games at this time. If we do, it will
	be added to the <a href="compatibility.php">Compatibility List</a>.<br><br>
	
    </ol>
  </li>

  <li><a name="2"></a><b>ScummVM and SCUMM games</b><br>

    <ol>
      <li><a name="2-1"></a><b>Do I need original CD or Floppy disks?</b></li>
	Most definitely. ScummVM won't work without them. If you would like to buy these games, we suggest you
	browse <a href="http://www.ebay.com">Ebay</a>. Do not ask the ScummVM team where you can download the 
	full versions of Lucas Arts games. These requests will be ignored.<br><br>

      <li><a name="2-2"></a><b>Does ScummVM work with all versions of games?</b></li>
	See <a href="#14">1.4 What games does ScummVM support?</a><br><br>
	
      <li><a name="2-3"></a><b>Can I play through xxx (place your favorite SCUMM adventure here) ?</b></li>
	See <a href="#14">1.4 What games does ScummVM support?</a><br><br>

      <li><a name="2-4"></a><b>Can I save/restore the game?</b></li>
	Yes. Saving and restoring is already supported (SHIFT-1/9 to save, CTRL - 1/9 to restore, or
	F5 to access the saving screen).<br><br>

      <li><a name="2-5"></a><b>Do savegames from the original games work in ScummVM?</b></li>
	No. We do not have any plans to load old savegames. Newer versions of ScummVM have also broke
	compatibility with older ScummVM savegames. Since ScummVM is still considered alpha, we may break
	savegames again in the future.<br><br>

    </ol>
  </li>

  <li><a name="3"></a><b>Graphics and Audio</b><br>

    <ol>
      <li><a name="3-1"></a><b>Does ScummVM support CD audio?</b></li>
      	Yes, ScummVM fully supports CD audio in Monkey Island CD, and Loom. Just keep your game CD
	inserted into your CD drive when you start ScummVM. If you have more than one CD drive in your
	system. You can specify your CD drive using the -c command line parameter. See the
	<a href="http://cvs.sourceforge.net/cgi-bin/viewcvs.cgi/scummvm/scummvm/README?rev=HEAD">README</a>
	for more info.<br><br>

      <li><a name="3-2"></a><b>Does ScummVM support using MP3 files instead of CD audio?</b></li>
	Yes. You can use LAME or some other CD audio conversion utility to convert your CD audio to MP3.  See the
	<a href="http://cvs.sourceforge.net/cgi-bin/viewcvs.cgi/scummvm/scummvm/README?rev=HEAD">README</a>
	for more info.<br><br>

      <li><a name="3-3"></a><b>Does ScummVM support filtered graphic modes?</b></li>
      	Yes, ScummVM supports several filtered graphic modes such as super2xsai.  See the
	<a href="http://cvs.sourceforge.net/cgi-bin/viewcvs.cgi/scummvm/scummvm/README?rev=HEAD">README</a>
	for more info.<br><br>
      
      <li><a name="3-4"></a><b>Can I run my game full screen?</b></li>
      	Yes. You can either start your game using the -f command line parameter. Or you can hit
	Alt+Enter in game to switch between full screen and windowed modes.<br><br>
      
    </ol>
  </li>

  <li><a name="4"></a><b>Troubleshooting</b><br>

    <ol>
      <li><a name="4-1"></a><b>My game won't run.</b></li>
      	First make sure your game is supported. See <a href="#14">1.4</a>. If it is a supported game and you
	have followed the instructions in
	<a href="http://cvs.sourceforge.net/cgi-bin/viewcvs.cgi/scummvm/scummvm/README?rev=HEAD">README</a>
	to the letter, then see <a href="#46">4.6</a> to report this as a bug.<br><br>
	
      <li><a name="4-2"></a><b>I don't hear any sound.</b></li>
      	Check the <a href="compatibility.php">Compatibility List</a> to see if your game has sound support currently. You can
	also try the -s command line param to set the in game SFX volume.<br><br>
      
      <li><a name="4-3"></a><b>I don't hear any music.</b></li>
      	By default, on most operating systems, ScummVM will automatically use ADLIB emulation. However, some games do not include
	Adlib music - such as Sam and Max. Note: MIDI may not be available on all operating systems or may need manual configuration.
	Use the -e command line param to choose the MIDI engine to use. See the 
	<a href="http://cvs.sourceforge.net/cgi-bin/viewcvs.cgi/scummvm/scummvm/README?rev=HEAD">README</a>
	for more info.<br><br>
      
      <li><a name="4-3"></a><b>My game crashes at some point.</b></li>
      	Check the <a href="compatibility.php">Compatibility List</a> to see if your game has any known issues. If you can
	reproduce this crash more than once, please report it to our Bug Tracker. See <a href="#46">4.6</a>.<br><br>
      
      <li><a name="4-5"></a><b>The game colors are messed up.</b></li>
      	This is a known issue with using Amiga version datafiles. Use the -a command line parameter to enable Amiga pal
	conversion.<br><br>
      
      <li><a name="4-6"></a><b>Reporting Bugs.</b></li>
      	To report a bug, please create a SourceForge account and follow the
	<a href="http://sourceforge.net/tracker/?atid=418820&group_id=37116&func=browse">bugs</a>
	link from our homepage. Please make sure the bug is reproducible, and 
	still exists in the latest daily build/current CVS version. Also check the
	<a href="compatibility.php">compatibility listing</a> for that game to ensure
	the issue is not already known.<br><br>
            
    </ol>
  </li>

</ol>

<?

echo html_round_frame_end("&nbsp;");

// end of html
echo html_p();
sidebar_end();
html_footer();

?>
