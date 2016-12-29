SVGFILES := $(wildcard *.svg)

all: $(SVGFILES:.svg=.png)

%.png : %.svg
	inkscape --export-png "$*.png" "$*.svg"

.PHONY: clean
clean:
	-rm *.png
