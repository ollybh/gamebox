SVGFILES := $(wildcard *.svg)
XCFFILES := $(wildcard *.xcf)
PNGFILES := $(SVGFILES:.svg=.png) $(XCFFILES:.xcf=.png)

all: $(PNGFILES)

%.png : %.svg
	inkscape --export-png "$*.png" "$*.svg"

%.png : %.xcf
	convert "$*.xcf" "$*.png"

.PHONY: clean
clean:
	-rm $(PNGFILES)
