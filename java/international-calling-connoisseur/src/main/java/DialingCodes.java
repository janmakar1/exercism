import java.util.HashMap;
import java.util.Map;

public class DialingCodes {

    Map<Integer, String> codes = new HashMap<>();

    public Map<Integer, String> getCodes() {
        return codes;
    }

    public void setDialingCode(Integer code, String country) {
        this.codes.put(code, country);
    }

    public String getCountry(Integer code) {
        return this.codes.get(code);
    }

    public void addNewDialingCode(Integer code, String country) {
        if(codes.containsKey(code) || codes.containsValue(country)) {
            return;
        } else {
            if (!codes.containsKey(code)) {
                this.codes.put(code, country);
            }
            if (!codes.containsValue(country)) {
                this.codes.put(code, country);
            }
        }
    }

    public Integer findDialingCode(String country) {
        for (var pair : this.codes.entrySet()) {
            if(pair.getValue().equals(country)) {
                return pair.getKey();
            }
        }
        return null;
    }

    public void updateCountryDialingCode(Integer code, String country) {
        Integer codeToChange = findDialingCode(country);
        if (codeToChange != null) {
            this.codes.put(code, country);
            this.codes.remove(codeToChange);
        }
    }
}
