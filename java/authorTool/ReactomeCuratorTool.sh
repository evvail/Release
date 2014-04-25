#!/bin/sh
java -Xmx512m -Dfile.encoding=UTF-8 \
-classpath reactome.jar:\
lib/jgraph.5.7.4.6.jar:\
lib/javaws.jar:\
lib/commons-lang-2.3.jar:\
lib/mysql-connector-java-5.0.8-bin.jar:\
lib/osxAdapter.jar:\
lib/log4j-1.2.12.jar:\
lib/servlet-api.jar:\
lib/batik/batik-awt-util.jar:\
lib/batik/batik-bridge.jar:\
lib/batik/batik-css.jar:\
lib/batik/batik-dom.jar:\
lib/batik/batik-extension.jar:\
lib/batik/batik-ext.jar:\
lib/batik/batik-gui-util.jar:\
lib/batik/batik-gvt.jar:\
lib/batik/batik-parser.jar:\
lib/batik/batik-script.jar:\
lib/batik/batik-svg-dom.jar:\
lib/batik/batik-svggen.jar:\
lib/batik/batik-swing.jar:\
lib/batik/batik-transcoder.jar:\
lib/batik/batik-util.jar:\
lib/batik/batik-xml.jar:\
lib/batik/js.jar:\
lib/batik/pdf-transcoder.jar:\
lib/batik/xerces_2_5_0.jar:\
lib/batik/xml-apis.jar:\
lib/jdom/jaxen-core.jar:\
lib/jdom/jaxen-jdom.jar:\
lib/jdom/jdom.jar:\
lib/jdom/saxpath.jar \
launcher.Launcher
