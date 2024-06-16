
let devToolsOpen = false;
        function detectDevTool() {
            const threshold = 160;
            if (window.outerWidth - window.innerWidth > threshold || window.outerHeight - window.innerHeight > threshold) {
                if (!devToolsOpen) {
                    window.location.href = 'http://bing.com';
                    window.stop;
                    debugger;
                }
                devToolsOpen = true;
            } else {
                devToolsOpen = false;
            }
        }

        setInterval(detectDevTool, 1);