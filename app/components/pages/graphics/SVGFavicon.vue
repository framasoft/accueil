<template>
  <svg
    id="svg5920"
    xmlns:dc="http://purl.org/dc/elements/1.1/"
    xmlns:cc="http://creativecommons.org/ns#"
    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
    xmlns:svg="http://www.w3.org/2000/svg"
    xmlns="http://www.w3.org/2000/svg"
    version="1.1"
    width="32"
    height="32"
  >
    <defs id="defs5922" />
    <metadata id="metadata5925">
      <rdf:rdf>
        <cc:work rdf:about="">
          <dc:format>image/svg+xml</dc:format>
          <dc:type
            rdf:resource="http://purl.org/dc/dcmitype/StillImage"
          />
          <dc:title />
        </cc:work>
      </rdf:rdf>
      <rdf:RDF>
        <cc:Work rdf:about="">
          <dc:format>image/svg+xml</dc:format>
          <dc:type
            rdf:resource="http://purl.org/dc/dcmitype/StillImage"
          />
          <dc:title />
        </cc:Work>
      </rdf:RDF>
    </metadata>
    <g
      id="layer1"
      transform="translate(-252.36127,-510.8581)"
    >
      <path
        id="path5626"
        d="m 1883.6676,510.71152 a 17.5,17.5 0 1 1 -35,0 17.5,17.5 0 1 1 35,0 z"
        transform="matrix(0.91428571,0,0,0.91428571,-1437.8491,59.921857)"
        :style="`
          fill:${color.border};
          fill-opacity:1;
          stroke:none;
          display:inline`"
      />
      <text
        id="text5115"
        x="268"
        y="525"
        text-anchor="middle"
        alignment-baseline="middle"
        xml:space="preserve"
        style="`
          font-size:20px;
          font-style:normal;
          font-variant:normal;
          font-weight:normal;
          font-stretch:normal;
          line-height:125%;
          letter-spacing:0px;
          word-spacing:0px;
          fill:#ffffff;
          fill-opacity:1;
          stroke:none;
          display:inline;
          font-size: 20px;
          font-family:ForkAwesome;`"
      >
        {{ icon.unicode }}
      </text>
    </g>
  </svg>
</template>

<script>
export default {
  props: {
    color: {
      type: Object,
      required: true,
      default() {
        return {
          border: '#6A5687',
          bec: '#EB7239',
        };
      },
    },
    icon: {
      type: Object,
      required: true,
      default() {
        return {
          fa: 'fighter-jet',
          unicode: '',
        };
      },
    },
  },
};
</script>
