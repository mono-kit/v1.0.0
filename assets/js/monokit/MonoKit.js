/*
* Powered by apexteam.net
* 2019/01/05
*/
var last_fragment = [];

class MonoKit {
    parseJson(j) {
        return JSON.stringify(j);
    }

    setCloud(k, v) {
        localStorage.setItem(k, v);
        return true;
    }

    getCloud(n) {
        return localStorage.getItem(n);
    }

    mono(method = "POST", url = "", s = '', e = '', parameters = {}) {
        var a = $.ajax({
            type: method,
            url: url,
            data: parameters,
            async: true,
            success: s,
            error: e,
        });
        return a;
    }

    si(id) {
        return document.getElementById(id);
    }

    loadFragment(fragment_id, frame_layout_id = 'iframe') {
        last_fragment.push(fragment_id);
        var frame_layout = this.si(frame_layout_id);
        this.mono("POST", 'app/index.php', function (response) {
            if (response['ok']) {
                frame_layout.innerHTML = response['html'];
                document.title = response['title'];
            } else {
                console.error("Error: can't load fragment");
            }
        }, function (error) {
            console.error("Error: can't load fragment - " + error);
        }, {
            id: fragment_id
        });
    }

    onBackPressed(state, frame = "iframe") {
        var MK = this;
        if (state) {
            (function (window, location) {
                history.replaceState(null, document.title, location.pathname + "#!/stealingyourhistory");
                history.pushState(null, document.title, location.pathname);

                window.addEventListener("popstate", function () {
                    if (location.hash === "#!/stealingyourhistory") {
                        history.replaceState(null, document.title, location.pathname);
                        setTimeout(function () {
                            var $i = last_fragment.length;
                            if ($i > 1) {
                                MK.loadFragment(last_fragment[$i - 2], frame);
                                var index = last_fragment.indexOf(last_fragment[$i - 1]);
                                if (index > -1) {
                                    last_fragment.splice(index, 1);
                                }
                            }
                        }, 0);
                    }
                }, false);
            }(window, location));
        }
    }
}