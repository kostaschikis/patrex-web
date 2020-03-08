$(document).ready(function() {
    if (window.location.href.indexOf("el") > -1) {
        document.getElementById("wd-span").innerText = GR_TXT_WD;
        document.getElementById("ec-span").innerText = GR_TXT_EC;
        document.getElementById("supp-span").innerHTML = GR_TXT_SUPP;
        document.getElementById("wr-span").innerText = GR_TXT_WR;
        document.getElementById("sm-span").innerText = GR_TXT_SM;
        document.getElementById("seo-span").innerHTML = GR_TXT_SEO;
        document.getElementById("ds-span").innerHTML = GR_TXT_DS;
        document.getElementById("cc-span").innerText = GR_TXT_CC;
        document.getElementById("is-span").innerHTML = GR_TXT_IS;
        document.getElementById("lcid-span").innerText = GR_TXT_LCID;
        document.getElementById("pcsm-span").innerText = GR_TXT_PCSM;
        document.getElementById("bddb-span").innerText = GR_TXT_BDDB;
        document.getElementById("wucc-span").innerHTML = GR_TXT_WUCC;
        document.getElementById("diy-span").innerHTML = GR_TXT_DIY;
        document.getElementById("sibc-span").innerHTML = GR_TXT_SIBC;
        document.getElementById("ga-span").innerText = GR_TXT_GA;
    } else {
        document.getElementById("wd-span").innerText = EN_TXT_WD;
        document.getElementById("ec-span").innerText = EN_TXT_EC;
        document.getElementById("supp-span").innerHTML = EN_TXT_SUPP;
        document.getElementById("wr-span").innerText = EN_TXT_WR;
        document.getElementById("sm-span").innerText = EN_TXT_SM;
        document.getElementById("seo-span").innerHTML = EN_TXT_SEO;
        document.getElementById("ds-span").innerHTML = EN_TXT_DS;
        document.getElementById("cc-span").innerText = EN_TXT_CC;
        document.getElementById("is-span").innerText = EN_TXT_IS;
        document.getElementById("lcid-span").innerText = EN_TXT_LCID;
        document.getElementById("pcsm-span").innerText = EN_TXT_PCSM;
        document.getElementById("bddb-span").innerText = EN_TXT_BDDB;
        document.getElementById("wucc-span").innerHTML = EN_TXT_WUCC;
        document.getElementById("diy-span").innerHTML = EN_TXT_DIY;
        document.getElementById("sibc-span").innerHTML = EN_TXT_SIBC;
        document.getElementById("ga-span").innerText = EN_TXT_GA;
    }
});
