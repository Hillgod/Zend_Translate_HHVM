# PURPOSE OF THIS FORK

Remove most of everything that's not needed for the Zend_Translate component.  Made numerous changes for this to work in HipHop VM, which mostly involves accounting for HHVM's lack of support for namespaces.

*Caching has been removed*
    
If you find that a function cannot be found in one of the Zend classes, try importing with 'use \function'.
For example: 'use \fopen;'

### Zend_Translate for HipHop-VM

Master - Tests are broke. Got rid of lots of things. TODO: Clean that up. : [![Build Status](https://secure.travis-ci.org/Hillgod/zf2.png?branch=master)](http://travis-ci.org/Hillgod/zf2)

### SYSTEM REQUIREMENTS

Zend Framework 2 requires PHP 5.3.3 or later; we recommend using the
latest PHP version whenever possible.

### INSTALLATION

Please see [INSTALL.md](INSTALL.md).

### CONTRIBUTING

If you wish to contribute to Zend Framework, please read both the
[CONTRIBUTING.md](CONTRIBUTING.md) and [README-GIT.md](README-GIT.md) file.

### QUESTIONS AND FEEDBACK

Online documentation can be found at http://framework.zend.com/manual.
Questions that are not addressed in the manual should be directed to the
appropriate mailing list:

http://framework.zend.com/archives/subscribe/

If you find code in this release behaving in an unexpected manner or
contrary to its documented behavior, please create an issue in our GitHub
issue tracker:

https://github.com/zendframework/zf2/issues

If you would like to be notified of new releases, you can subscribe to
the fw-announce mailing list by sending a blank message to
<fw-announce-subscribe@lists.zend.com>.

### LICENSE

The files in this archive are released under the Zend Framework license.
You can find a copy of this license in [LICENSE.txt](LICENSE.txt).

### ACKNOWLEDGEMENTS

The Zend Framework team would like to thank all the [contributors](https://github.com/zendframework/zf2/contributors) to the Zend
Framework project, our corporate sponsor, and you, the Zend Framework user.
Please visit us sometime soon at http://framework.zend.com.
