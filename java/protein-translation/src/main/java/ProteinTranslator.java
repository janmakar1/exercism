import java.util.List;
import java.util.ArrayList;
import java.util.Map;

class ProteinTranslator {

    List<String> translate(String rnaSequence) {
        
        Map<String, String> map = Map.ofEntries(
                Map.entry("AUG", "Methionine"),
                Map.entry("UUU", "Phenylalanine"),
                Map.entry("UUC", "Phenylalanine"),
                Map.entry("UUA", "Leucine"),
                Map.entry("UUG", "Leucine"),
                Map.entry("UCU", "Serine"),
                Map.entry("UCC", "Serine"),
                Map.entry("UCA", "Serine"),
                Map.entry("UCG", "Serine"),
                Map.entry("UAU", "Tyrosine"),
                Map.entry("UAC", "Tyrosine"),
                Map.entry("UGU", "Cysteine"),
                Map.entry("UGC", "Cysteine"),
                Map.entry("UGG", "Tryptophan"),
                Map.entry("UAA", "STOP"),
                Map.entry("UAG", "STOP"),
                Map.entry("UGA", "STOP")
            );

        List<String> proteins = new ArrayList();
        String[] splits;
        String rnaStrand = new String(rnaSequence);
        boolean processing = true;
        do {
            try {

                var key = rnaStrand.substring(0, 3);
                rnaStrand = rnaStrand.substring(3);

                if (map.containsKey(key)) {
                    var protein = map.get(key);
                    if (protein == "STOP") {
                        processing = false;
                    } else {
                        proteins.add(protein);
                    }
                } else {
                    proteins.add("NIEMA");
                    throw new IllegalArgumentException("Invalid codon");
                }
            } catch (StringIndexOutOfBoundsException ex) {
                processing = false;
                if (rnaStrand.length() != 0) { // incomplete codon - the rest of string is not a complete codon
                    throw new IllegalArgumentException("Invalid codon");
                }
            }
        } while(processing);

        return proteins;
    }
}
