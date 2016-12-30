SVGFILES := $(wildcard *.svg)
PNGFILES := $(SVGFILES:.svg=.png)

all: $(PNGFILES)

%.png : %.svg
	inkscape --export-png "$*.png" "$*.svg"

.PHONY: clean
clean:
	-rm $(PNGFILES)
