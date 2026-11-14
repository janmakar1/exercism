import java.util.Map;

class RnaTranscription {

    String transcribeOne(String input) {
        Map<String, String> map = Map.of(
            "G", "C",
            "C", "G",
            "T", "A",
            "A", "U");
        return map.containsKey(input) ? map.get(input) : "";
    }

    String transcribe(String dnaStrand) {
        StringBuilder sb = new StringBuilder(dnaStrand.length());
        for(String ch : dnaStrand.split("")) {
            sb.append(this.transcribeOne(ch));
        }
        return sb.toString();
    }

}
