import replace from "gulp-replace"; //find and replase
import plumber from "gulp-plumber"; //error processing
import notify from "gulp-notify"; //hints
import browsersync from "browser-sync"; //local serwer
import newer from "gulp-newer"; //control image update
import ifPlugin from "gulp-if"; //conditional branching


export const plugins = {
	replace: replace,
	plumber: plumber,
	notify: notify,
	browsersync: browsersync,
	newer: newer,
	if: ifPlugin
}